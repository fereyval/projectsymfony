<?php

namespace Test\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Test\GeneralBundle\form\formType;

class DefaultController extends Controller
{

    public function indexAction()
    {
   		$form = $this->createForm(new formType());

    	$request = $this->getRequest();
    	if ($request->getMethod() == 'POST') 
    	{
       		$form->bind($request);

			$data = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject('Demande de Devis')
                ->setFrom($data['Mail'])
                ->setTo('fereyva@hotmail.fr')
                ->setBody($form->getData());
        	$this->get('mailer')->send($message);
    		$this->get('session')->getFlashBag()->set('notice', 'gg thats done');
   			return $this->redirect($this->generateUrl('envoi_reussi'));

            }
		return $this->render('TestGeneralBundle:Default:index.html.twig', array('form' => $form->createView()));
    }





    public function succesAction()
    {
    	return $this->render('TestGeneralBundle:Default:succes.html.twig');
    }
}