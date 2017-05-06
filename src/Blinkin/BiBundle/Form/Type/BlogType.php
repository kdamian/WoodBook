<?php

namespace Blinkin\BiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BlogType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('title', 'text', array(
                    'attr' => array(
                        'placeholder' => 'Tytuł',
                    ),
                    'label' => 'Tytuł'))
                ->add('body', 'textarea', array(
                    'attr' => array(
                        'placeholder' => 'Treść',
						'style' => 'min-width:500px; height:200px;'
                    ),
                    'label' => 'Treść'))
                ->add('submit', 'submit', array(
                    'attr' => array(
                        'class' => 'pure-button',
                    ),
                    'label' => 'Zapisz'
                ));
    }

    public function getName() {
        return 'blog';
    }

}
