<?php

namespace OuisendAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OuisendAdminBundle\Entity\Account;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OuisendAdminBundle:Default:index.html.twig', array('name' => $name));
    }
	
	// The following will be for demo purposes 
	public function ajouterAction() {
		
		$account = new Account(); 
		// On crée le FormBuilder grâce à la méthode du contrôleur
		$formBuilder = $this->createFormBuilder($article);
		// On ajoute les champs de l'entité que l'on veut à notre formulaire
		$formBuilder
		->add('date','date')  
		->add('titre', 'text') 
		->add('contenu', 'textarea') 
		->add('auteur', 'text')
		->add('publication', 'checkbox');
		
		// Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard
		// À partir du formBuilder, on génère le formulaire
		$form = $formBuilder->getForm();
		// On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
		return $this->render( 'OuisendAdminBundle:Default:ajouter.html.twig', 
							  array ('form' => $form->createView(), ));
							  
	}
}
