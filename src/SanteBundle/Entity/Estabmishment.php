<?php

namespace SanteBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estabmishment
 *
 * @ORM\Table(name="estabmishment")
 * @ORM\Entity(repositoryClass="SanteBundle\Repository\EstabmishmentRepository")
 */
class Estabmishment
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    private $icon;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=255)
     */
    private $web;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="Longitude", type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $nameImage;
    /**
     * @Assert\File(maxSize="600k")
     */
    public $file;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Estabmishment
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
     * Set adress
     *
     * @param string $adress
     *
     * @return Estabmishment
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Estabmishment
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Estabmishment
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set web
     *
     * @param string $web
     *
     * @return Estabmishment
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Estabmishment
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Estabmishment
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Estabmishment
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    public function getWebPath(){
        return null===$this->nameImage ? null : $this->getUploadDir.'/'.$this->nameImage;
    }
    protected function getUploadRootDir(){
        return __DIR__.'../../../../web/images/'.$this->getUploadDir();

    }
    protected function getUploadDir(){
        return 'Estabmishment';
    }
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function UploadProfilePicture(){
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->nameImage=$this->file->getClientOriginalName();
        $this->file=null;
    }
    /**
     * Set nameImage
     *
     * @param string $nameImage
     *
     * @return Estabmishment
     */
    public function setNameImage($nameImage){
        $this->nameImage=$nameImage;
        return $this;
    }
    /**
     * Get nameImage
     *
     * @return string
     */
    public function getNameImage(){
        return $this->nameImage;
    }

}
