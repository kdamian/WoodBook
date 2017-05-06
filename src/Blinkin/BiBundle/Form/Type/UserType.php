<?php

namespace Blinkin\BiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
               ->add('name', 'text', array(
                    'attr' => array(
                        'placeholder' => 'imię'
                    )
                ))
                ->add('lname', 'text', array(
                    'attr' => array(
                        'placeholder' => 'nazwisko'
                    )
                ))
                ->add('tel', 'text', array(
                    'attr' => array(
                        'placeholder' => 'telefon'
                    )
                ))
				->add('img', 'text', array(
                    'required' => false
                ))
                ->add('submit', 'submit', array(
                    'label' => 'Zapisz',
                    'attr' => array(
                        'class' => 'pure-button'
                    )
        ));
    }

    public function getName() {
        return 'user';
    }

}
