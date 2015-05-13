<?php

namespace MewPipe\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MewPipeVideoBundle:Default:index.html.twig', array('name' => $name));
    }
}
