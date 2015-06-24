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
		
		// On récupère la requête
		$request = $this->get('request');
		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
			$form->bind($request);
			
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) {
				// On l'enregistre notre objet $article dans la base de données
				$em = $this->getDoctrine()->getManager(); $em->persist($article);
				$em->flush();
				
				// On redirige vers la page de visualisation de l'article nouvellement créé
				return $this->redirect($this->generateUrl('sdzblog_voir', array('id' => $article->getId())));
			}
		}
		// À ce stade :
		// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
		
		$account = new Account(); 
		/*
		// On crée le FormBuilder grâce à la méthode du contrôleur
		$formBuilder = $this->createFormBuilder($account);
		// On ajoute les champs de l'entité que l'on veut à notre formulaire
		$formBuilder
		->add('date','date')  
		->add('titre', 'text') 
		->add('contenu', 'textarea') 
		->add('auteur', 'text')
		￼->add('publication', 'checkbox', array('required' => false))
		;
		
		// Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard
		// À partir du formBuilder, on génère le formulaire
		$form = $formBuilder->getForm();
		*/
		$form = $this->createForm(new AccountType, $account);
		
		
		// On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
		return $this->render( 'OuisendAdminBundle:Default:ajouter.html.twig', 
							  array ('form' => $form->createView(), ));
							  
	}
}
