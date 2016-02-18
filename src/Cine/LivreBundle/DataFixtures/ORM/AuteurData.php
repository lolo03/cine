<?php

namespace Cine\LivreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cine\LivreBundle\Entity\Auteur;

class AuteurData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new Auteur();
        $user->setNom("Brion");
        $user->setPrenom("Patrick");
        $manager->persist($user);

        $user = new Auteur();
        $user->setNom("Lenne");
        $user->setPrenom("Gérard");
        $manager->persist($user);

        $manager->flush();
    }

}
