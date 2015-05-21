<?php

namespace MewPipe\VideoBundle\Controller;

use MewPipe\VideoBundle\Entity\Video;
use MewPipe\VideoBundle\Form\VideoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var User $user
     */
    private $user;


    /**
     * @param Request $request
     * @param integer $page
     * @param integer $max
     * @param string $sort
     * @param string $direction
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $page = 1, $max = 5, $sort = 'createdAt', $direction = 'desc')
    {
        /** @var EntityManager em */
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $pagination_page = $request->query->get('page', $page);
        $pagination_max = $request->query->get('max', $max);
        $pagination_sort = $request->query->get('sort', $sort);
        $pagination_direction = $request->query->get('direction', $direction);

        $listVideos = $em->getRepository("MewPipeVideoBundle:Video")
            ->getListVideo(
                $pagination_sort,
                $pagination_direction);

        /** @var Paginator $paginator */
        $request->query->set('sort', $sort);
        $request->query->set('direction', $direction);
        $paginator  = $this->container->get('knp_paginator');
        /** @var SlidingPagination $pagination */
        $pagination = $paginator->paginate($listVideos, $request->query->get('page', $page), $max);
        $pagination->setUsedRoute('mew_pipe_video_homepage_pager');

        return $this->render('MewPipeVideoBundle:Default:index.html.twig', array(
            'length'     => count($listVideos),
            'pagination' => $pagination,
            'page'       => $pagination_page,
            'max'        => $pagination_max,
            'sort'       => $pagination_sort,
            'direction'  => $pagination_direction,
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function UploadVideoAction(Request $request)
    {

        //$user = $this->getUser();
        /** @var EntityManager em */
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        if (!$user) {
            return $this->redirect($this->generateUrl('mew_pipe_video_homepage'));
        }

        $uploadManager = $this->container->get('stof_doctrine_extensions.uploadable.manager');

        $formType = new VideoType();
        $form = $this->createForm($formType, new Video());
        $form->add('submit', 'submit', array('label' => 'Enregistrer la video !','attr' => array('class' => 'btn-success btn')));

        $form->handleRequest($request);
        if ($form->isValid()) {
            $formVideo = $form->getData();
            $formVideo->setUser($user);

            $em->persist($formVideo);
            $uploadManager->markEntityToUpload($formVideo, $formVideo->getFile());
            $em->flush();
            return $this->redirect($this->generateUrl('mew_pipe_video_homepage'));
        }

        return $this->render('MewPipeVideoBundle:Video:upload.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
}
