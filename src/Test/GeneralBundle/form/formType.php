<?php

namespace Test\GeneralBundle\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class formType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$builder
    		->add('Evenement', 'choice', array('choices' => array('0' => 'Team building', '1' => 'codir', '2' => 'Evenement client')))
    		->add('Convives', 'choice', array('choices' => array('0' => '1-5 personnes', '1' => '5-10 personnes', '2' => '10-15 personnes', '3' => '15-20 personnes')))
    		->add('Date', 'date')
    		->add('Thematique', 'choice', array('choices' => array('0' => 'vin', '1' => 'spiritueux', '2' => 'bière', '3' => 'cocktail', '4' => 'thé', '5' => 'café', '6' => 'cours')))
    		->add('Budget', 'choice', array('choices' => array('0' => '20-30€/pers', '1' => '30-40€/pers', '2' => '40-50€/pers', '3' => '50-60€/pers', '4' => '60-70€/pers', '5' => '70€ et plus /pers')))
    		->add('Nom')
    		->add('Mail', 'email')
    		->add('Demander', 'submit');
    }

    public function getName()
    {
    	return 'test_generalbundle_form';
    }
}