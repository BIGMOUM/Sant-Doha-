<?php

namespace SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Article
 *
 * @ORM\Table(name="Article")
 * @ORM\Entity(repositoryClass="SanteBundle\Repository\ArticleRepository")
 * @Vich\Uploadable
 *
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Acteur", type="string", length=255)
     */
    private $acteur;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
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
     * Set acteur
     *
     * @param string $acteur
     *
     * @return Article
     */
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get acteur
     *
     * @return string
     */
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Article
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateReation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation = new \DateTimeImmutable();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @Vich\UploadableField(mapping="devis", fileNameProperty="devisName")
     *
     * @Assert\File(
     *     maxSize = "500M")
     *
     * @var File
     *
     */
    private $devisFile;

    /**
     * @ORM\Column(type="string", length=255)

     *
     * @var string
     */
    private $devisName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;
    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $devis
     *
     * @return Article
     */
    public function setDevisFile(File $devis = null)
    {
        $this->devisFile = $devis;

        if ($devis)
            $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    /**
     * @return File|null
     */
    public function getDevisFile()
    {
        return $this->devisFile;
    }

    /**
     * @param string $devisName
     *
     * @return Article
     */
    public function setDevisName($devisName)
    {
        $this->devisName = $devisName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDevisName()
    {
        return $this->devisName;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="id_video", type="string", length=255)
     */
    private $id_video;

    /**
     * @return string
     */
    public function getIdVideo()
    {
        return $this->id_video;
    }

    /**
     * @param string $id_video
     */
    public function setIdVideo($id_video)
    {
        $this->id_video = $id_video;
    }

}