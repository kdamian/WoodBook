<?php

namespace Blinkin\BiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class HelpType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', 'text', array(
                        'attr' => array(
                        'class' => 'pure-input-1-2', 
                        'placeholder' => 'Imię/Login',
                    ),
                    'label' => 'Imie'))
                ->add('email', 'email', array(
                        'attr' => array(
                        'class' => 'pure-input-1-2', 'placeholder' => 'E-mail'
                    )))
                ->add('subject', 'text', array(
                        'attr' => array(
                        'class' => 'pure-input-1-2', 'placeholder' => 'Tytuł'
                    )))
                ->add('body', 'textarea', array(
                        'attr' => array(
                        'class' => 'pure-input-1-2', 'placeholder' => 'Zadaj pytanie'
                    )));
    }

    public function getName() {
        return 'contact';
    }

}
