<?php

namespace Cine\LivreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(
 *    name="livre"
 * )
 * @ORM\Entity(repositoryClass="Cine\LivreBundle\Entity\LivreRepository")
 */
class Livre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var smallint
     *
     * @ORM\Column(name="num", type="smallint", length=255)
     */
    private $num;

    /**
     * @var smallint
     *
     * @ORM\Column(name="editeur", type="smallint")
     */
    private $editeur;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=4)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=2)
     */
    private $mois;
 
   /**
     * @var smallint
     *
     * @ORM\Column(name="pages", type="smallint")
     */
    private $pages;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=2)
     */
    private $langue;
 
   /**
     * @var text
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;
 
   /**
     * @var boolean
     *
     * @ORM\Column(name="stops", type="boolean")
     */
    private $stops;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Livre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Livre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return Livre
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set editeur
     *
     * @param integer $editeur
     * @return Livre
     */
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return integer 
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return Livre
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set mois
     *
     * @param string $mois
     * @return Livre
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string 
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     * @return Livre
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return integer 
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set langue
     *
     * @param string $langue
     * @return Livre
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Livre
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set stops
     *
     * @param boolean $stops
     * @return Livre
     */
    public function setStops($stops)
    {
        $this->stops = $stops;

        return $this;
    }

    /**
     * Get stops
     *
     * @return boolean 
     */
    public function getStops()
    {
        return $this->stops;
    }

}
