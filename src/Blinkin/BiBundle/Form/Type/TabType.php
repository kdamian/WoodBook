<?php

namespace Blinkin\BiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TabType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', 'text', array(
                    'attr' => array(
                        'placeholder' => 'Tytuł'
                    ),
                    'label' => 'Tytuł'
                ))
                ->add('src', 'text', array(
                    'label' => 'Plik'))
                ->add('submit', 'submit', array(
                    'attr' => array(
                        'class' => 'pure-button',
                    ),
                    'label' => 'Zapisz'
                ));
    }

    public function getName() {
        return 'tab';
    }

}
