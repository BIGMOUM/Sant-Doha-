<?php

namespace SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="SanteBundle\Repository\produitRepository")
 */
class produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    protected $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    protected $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    protected $categorie;

    /**
     * @var int
     *
     * @ORM\Column(name="qteStock", type="integer")
     */
    protected $qteStock;

    /**
     * @var UploadedFile
     */
    public $file ;


    /**
     * Get id
     *
     * @return int
     */


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return produit
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set qteStock
     *
     * @param integer $qteStock
     *
     * @return produit
     */
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;

        return $this;
    }

    /**
     * Get qteStock
     *
     * @return int
     */
    public function getQteStock()
    {
        return $this->qteStock;
    }



    public function setId($id)
    {
        $this->id = $id;


    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }



}

