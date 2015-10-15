<?php

namespace Cine\LivreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Cine\LivreBundle\Entity\Auteur;

class AuteurController extends Controller
{
    public function listAction()
    {        
       // Récupération de l'entity manager
        $em = $this->getDoctrine()->getManager();

        $rep = $this->getDoctrine()
                   ->getRepository('CineLivreBundle:Auteur');
        // $auteurs = $rep->findAll();
        $auteurs = $em
                    ->getRepository("CineLivreBundle:Auteur")
                    ->getAuteurs();
        foreach ($auteurs as $auteur) {
          echo '<p>'.$auteur->getPrenom().' '.$auteur->getNom().'</p>';
        }

        return $this->render('CineLivreBundle:Auteur:index.html.twig',
        array('nom' => 'Auteur'));
    }

    public function updateAction()
    {        
       // Récupération de l'entity manager
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('CineLivreBundle:Auteur');

        $auteur = $rep->find(3);
        if ($auteur === null) {
          throw $this->createNotFoundException('auteur inexistant');
        }
        $auteur->setPrenom('Michel');
        /*
        $auteur2 = new Auteur;
        $auteur2->setNom('Chion');
        $auteur2->setPrenom('Patrick');
        $em->persist($auteur2);
        */
        $em->flush();

        echo '<p>'.$auteur->getPrenom().' '.$auteur->getNom().'</p>';
        return $this->render('CineLivreBundle:Auteur:index.html.twig',
        array('nom' => 'Auteur'));
    }
   
}
