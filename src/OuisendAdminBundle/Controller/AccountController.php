<?php

// src/OuisendAdminBundle/Controller/HelloController.php

namespace OuisendAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AccountController extends Controller
{
	
	public function getRepository () {
		$repository = 
    		$this->getDoctrine()
            	 ->getRepository('OuisendAdminBundle:Account');
		return $repository; 
	}
	
	public function getManager () {
		$manager = 
    		$this->getDoctrine()
            	 ->getManager ();
		return $manager; 
	}
	
    public function indexAction()
    {
    	// TODO complete fetching those records with parameters
        $elements = getRepository()->findAll();
        return $this->render('OuisendAdminBundle:Account:show.html.twig', array('data' => $elements));
    }
	
	public function detailAction($id) {
		
        $element = getRepository()->find($id);
		
		return $this->render('OuisendAdminBundle:Account:detail.html.twig', 
							 array('data' => $element));
	}
	
	public function deleteAction($id) {
		
        $element = getRepository()->find($id);
		getRepository()->delete($element);
		
		return $this->redirect(
			   $this->generateUrl('ouisendadmin_account_index'));
	}
	
	public function createAction () {
			
		$element = new Account; 
		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {

			$form->bind($request);
			if ($form->isValid()) {
				getManager()->persist($element);
				getManager()->flush();
				
				return $this->redirect(
					   $this->generateUrl('ouisendadmin_account_detail', 
					   					  array('data' => $element)));
			}
		}
		
		$form = $this->createForm(new AccountType, $element);
		return $this->redirect(
			   $this->generateUrl('ouisendadmin_account_detail', 
			   					  array('data' => $element)));
		
	}
}
