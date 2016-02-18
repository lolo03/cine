<?php

namespace Cine\LivreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Cine\LivreBundle\Entity\Editeur;

class EditeurController extends Controller
{
    public function indexAction()
    {
        return $this->render('CineLivreBundle:Editeur:index.html.twig',
        array('nom' => 'Laurent'));
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
        return $this->render('CineLivreBundle:Editeur:index.html.twig',
        array('nom' => 'Laurent2'));
    }

}
