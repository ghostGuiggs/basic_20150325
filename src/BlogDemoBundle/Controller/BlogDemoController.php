<?php

namespace BlogDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogDemoController extends Controller {

	public function indexAction() {
		// Initial implementation
		// On fixe un id au hasard ici, il sera dynamique par la suite, évidemment
		/*
		$id = 5;
		return $this -> render('BlogDemoBundle:BlogDemo:blog.html.twig', array('nom' => 'blog', 'article_id' => $id));
		*/

		/*
		 // On veut avoir l'URL de l'article d'id $id.
		 // Pour générer une URL absolue, lorsque vous l'envoyez par e-mail, par exemple, il faut mettre le troisième argument à true.
		 $url = $this -> generateUrl('sdzblog_voir', array('id' => $id));
		 // $url vaut « /blog/article/5 »
		 // On redirige vers cette URL (ça ne sert à rien, on est d'accord, c'est pour l'exemple !)
		 return $this -> redirect($url);
		 */
		
		// Version finale
		// Les articles :
		$articles = array(
						array(
						'titre' => 'Mon weekend a Phi Phi Island !',
						'id' => 1,
						'auteur' => 'winzou',
						'contenu' => 'Ce weekend était trop bien. Blabla...', 'date' => new \Datetime()),
						array(
						'titre' => 'Repetition du National Day de Singapour', 'id' => 2,
						'auteur' => 'winzou',
						'contenu' => 'Bientôt prêt pour le jour J. Blabla...', 'date' => new \Datetime()),
						array(
						'titre' => 'Chiffre d\'affaire en hausse',
						'id' => 3,
						'auteur' => 'M@teo21',
						'contenu' => '+500% sur 1 an, fabuleux. Blabla...', 'date' => new \Datetime())
		);
		
		return $this -> render('BlogDemoBundle:BlogDemo:index.html.twig', array('articles' => $articles ));
	}
	
	public function menuAction($nombre) {
		// On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
		$liste = array( array('id' => 2, 'titre' => 'Mon dernier weekend !'),
					    array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
						array('id' => 9, 'titre' => 'Petit test')
		);
		return $this->render('BlogDemoBundle:BlogDemo:menu.html.twig',
							 array( 'liste_articles' => $liste ));
			// C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
		
	}

	// On donne à cette méthode l'argument $id, pour correspondre au paramètre {id} de la route
	public function voirAction($id) {
		// $id vaut 5 si l'on a appelé l'URL /blog/article/5
		// Ici, on récupèrera depuis la base de données l'article correspondant à l'id $id
		// Puis on passera l'article à la vue pour qu'elle puisse l'afficher

		/* Version 1
		 return new Response("Affichage de l'article d'id : " . $id . ".");
		 */
		
		// ( $request->getMethod() == 'POST' ) => Methode de la requete

		//  $request->isXmlHttpRequest() => C'est une requête AJAX, retournons du JSON, par exemple
		
		/*
		// On récupère la requête exemple l'URL /blog/article/5?tag=vacances
		$request = $this -> getRequest();
		// On récupère notre paramètre tag
		$tag = $request->query->get('tag');
		*/
		
		// Version 2
		// $response = new Response("Affichage de l'article d'id : ".$id.", avec le tag : ".$tag);
		
		/*
		// Version 3 : On crée la réponse sans lui donner de contenu pour le moment
		$response = new Response; // On définit le contenu
		$response->setContent('Ceci est une page d\'erreur 404');
		// On définit le code HTTP
		// Rappelez-vous, 404 correspond à « page introuvable » $response->setStatusCode(404);
		// On retourne la réponse
		*/
		
		// Version 4
		// $response = $this -> render('BlogDemoBundle:BlogDemo:voir.html.twig', array('id' => $id));
		
		// Version 5
		// $response = $this->redirect( $this->generateUrl('sdzblog_accueil', array('page' => 2)) );
		
		// Version 6
		// Créons nous-mêmes la réponse en JSON, grâce à la fonction json_encode()
		// $response = new Response(json_encode(array('id' => $id)));
		// Ici, nous définissons le Content-type pour dire que l'on renvoie du JSON et non du HTML
		// $response->headers->set('Content-Type', 'application/json');
		
		// Récupération du service
		/*
		$mailer = $this->get('mailer');
		// Création de l'e-mail : le service mailer utilise SwiftMailer, donc nous créons une instance de Swift_Message
		$message = \Swift_Message::newInstance()
						->setSubject('Hello zéro !')
						->setFrom('tutorial@symfony2.com')
						->setTo('dasilveira.tata@mail.com')
						->setBody('Coucou, voici un email que vous venez de recevoir!');
		// Retour au service mailer, nous utilisons sa méthode « send()» pour envoyer notre $message
		$mailer->send($message);
		// N'oublions pas de retourner une réponse, par exemple une page qui afficherait « L'e-mail a bien été envoyé »
		$response = new Response('Email bien envoyé');
		*/
		$article = array(
		'id' => $id,
		'titre' => 'Mon weekend a Phi Phi Island !', 'auteur' => 'winzou',
		'contenu' => 'Ce weekend était trop bien. Blabla...', 'date' => new \Datetime()
		);
		
		$response = $this -> render('BlogDemoBundle:BlogDemo:voir.html.twig', array('article' => $article));
		
		return $response; 
	}

	// On récupère tous les paramètres en arguments de la méthode
	public function voirSlugAction($slug, $annee, $format) {
		return new Response("On pourrait afficher l'article correspondant au slug '" . $slug . "', créé en " . $annee . " et au format " . $format . ".");
	}

	public function ajouterAction() {

		// Version 1
		// $response = $this -> render('BlogDemoBundle:BlogDemo:ajouter.html.twig', array('name' => $name));
		
		// Bien sûr, cette méthode devra réellement ajouter l'article
		//Mais faisons comme si c'était le cas
		$this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
		
		// Le « flashBag » est ce qui contient les messages flash dans la session
		// Il peut bien sûr contenir plusieurs messages :
		$this->get('session')->getFlashBag()->add('info', 'Oui oui, il est bien enregistré !');
		// Puis on redirige vers la page de visualisation de cet article
	
		$response = $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 5)) );

		return $response; 
	}

	// On donne à cette méthode l'argument $id, pour correspondre au paramètre {id} de la route
	public function modifierAction($id) {
		
		$article = array(
		'id' => 1,
		'titre' => 'Mon weekend a Phi Phi Island !', 'auteur' => 'winzou',
		'contenu' => 'Ce weekend était trop bien. Blabla...', 'date' => new \Datetime()
		);
		// Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
		return $this->render('BlogDemoBundle:BlogDemo:modifier.html.twig',
		array(
		'article' => $article
		)); 

	}

	// On donne à cette méthode l'argument $id, pour correspondre au paramètre {id} de la route
	public function supprimerAction($id) {
		
		// Bien sûr, cette méthode devra réellement ajouter l'article
		//Mais faisons comme si c'était le cas
		$this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
		
		// Le « flashBag » est ce qui contient les messages flash dans la session
		// Il peut bien sûr contenir plusieurs messages :
		$this->get('session')->getFlashBag()->add('info', 'Oui oui, il est bien supprimé !');
		// Puis on redirige vers la page de visualisation de cet article
	
		$response = $this->redirect( $this->generateUrl('sdzblog_accueil') );

		return $response; 
	}
}
