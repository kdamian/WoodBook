<?php

namespace Blinkin\BiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class HistoryType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('date_from', 'text', array(
                    'attr' => array(
                        'placeholder' => 'Od',
                    ),
                    'label' => 'Od'))
                ->add('date_to', 'text', array(
                    'attr' => array(
                        'placeholder' => 'Do',
                    ),
                    'label' => 'Do'))
                ->add('name', 'text', array(
                    'attr' => array(
                        
                        'placeholder' => 'Tytuł'
                    ),
                    'label' => 'Tytuł'
                ))
                ->add('body', 'textarea', array(
                    'attr' => array(
                       'style' => 'width:500px; height:200px;', 
                        'placeholder' => 'Opis'
                    ),
                    'label' => 'Opis'))
                ->add('submit', 'submit', array(
                    'attr' => array(
                        'class' => 'pure-button',
                    ),
                    'label' => 'Zapisz'
                ));
    }

    public function getName() {
        return 'history';
    }

}
