<?php

namespace Cine\LivreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Cine\LivreBundle\Entity\Editeur;

class EditeurController extends Controller
{
    public function indexAction()
    {
        return $this->render('CineLivreBundle:Editeur:index.html.twig');
    }

    public function afficherAction()
    {
	$repository = $this->getDoctrine()
       	            ->getManager()
                    ->getRepository('CineLivreBundle:Editeur');

        $listeEditeurs = $repository->findAll();
        return $this->render('CineLivreBundle:Editeur:liste.html.twig',
        array('liste_editeurs' => $listeEditeurs));
    }

    public function ajouterAction()
    {
        $editeur = new Editeur();
        $editeur->setNom('Nom');
        $editeur->setAdresse('Adresse');
        $editeur->setWeb('http://toto.fr');
 
        $em = $this->getDoctrine()->getManager();
        $em->persist($editeur);
        $em->flush();

        if ($this->getRequest()->getMethod() == 'POST') {
          $this->get('session')->getFlashBag()->add('info', 'Editeur enregistré');
        }
	return new Response('Editeur ajouté'); 
    }

}
