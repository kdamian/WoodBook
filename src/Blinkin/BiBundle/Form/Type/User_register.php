<?php

namespace Blinkin\BiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class User_register extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('email', 'email', array(
					'attr' => array(
                        'placeholder' => 'E-mail'
                    ),
                    'label' => 'E-mail'
                ))
                ->add('username', 'text', array(
					'attr' => array(
                        'placeholder' => 'Nazwa'
                    ),
                    'label' => 'Login'
                ))
                ->add('password', 'repeated', array(
                    'type' => 'password',
                    'first_options' => array(
						'attr' => array(
							'placeholder' => 'Hasło'),
						'label' => 'Hasło'),
                    'second_options' => array(
						'attr' => array(
							'placeholder' => 'Powtórz hasło'),
						'label' => 'Powtórz hasło'),
                ))
                ->add('submit', 'submit', array(
                    'label' => 'Zarejestruj się',
                    'attr' => array(
                        'class' => 'pure-button'
                    )
        ));
    }

//    public function configureOptions(OptionsResolver $resolver) {
//        $resolver->setDefaults(array(
//            'data_class' => 'BiBundle\Entity\User'
//        ));
//    }

    public function getName() {
        return 'user';
    }

}
