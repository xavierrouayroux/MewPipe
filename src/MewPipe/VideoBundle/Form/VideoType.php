<?php

namespace MewPipe\VideoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'title',
                'text',
                array(
                    'label'                 =>  'Titre de la video',
                    'required'              =>  true,
                )
            )
            ->add(
                'description',
                'text',
                array(
                    'label'                 =>  'Description de la video',
                    'required'              =>  true,
                )
            )
            ->add(
                'tags',
                'text',
                array(
                    'label'                 =>  'Tags de la video',
                    'required'              =>  false,
                )
            )
            ->add(
                'file',
                'file',
                array(
                    'label'                 =>  'Fichier video',
                    'required'              =>  true,
                    'label_attr'            => array('class' => 'col-sm-offset-1'),
                    'attr'                  => array('class' => 'col-sm-12')
                )
            )
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mew_pipe_video_upload';
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'MewPipe\VideoBundle\Entity\Video',
            )
        );
    }
}