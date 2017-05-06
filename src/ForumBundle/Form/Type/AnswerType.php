<?php

namespace ForumBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AnswerType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
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
					'label' => 'Dodaj'));
	}

	public function getName() {
		return 'answer';
	}

}
