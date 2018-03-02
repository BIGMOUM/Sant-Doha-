<?php

namespace SanteBundle\Entity;

use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query\AST\Functions\CurrentDateFunction;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bridge\Twig\Extension\AssetExtension;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * blog
 *
 * @ORM\Table(name="blog")
 * @ORM\Entity(repositoryClass="SanteBundle\Repository\blogRepository")
 *  
 */

class blog
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
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;
    /**
     * @ORM\ManyToOne(targetEntity="SanteBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, name="idUser")
     */
private $idUser;
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="blog")
     */
    private $comment;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer")
     */
private $rating;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


    /**
     * @var comment
     *
     * @ORM\ManyToOne(targetEntity="categorie")
     * @ORM\JoinColumn(name="categorie", referencedColumnName="id")
     */
    private $categorie;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return blog
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
     * Set author
     *
     * @param string $author
     *
     * @return blog
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

  

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return blog
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return blog
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function __construct()
    {
        $this->setCreatedAt(new \DateTime('now', (new \DateTimeZone('Africa/Tunis'))));
        $this->setUpdatedAt(new \DateTime());

    }
    public function setUpdatedValue()
    {
        $this->setUpdatedAt((new \DateTime()));
    }
    /**
     * @var string
     *
     * @ORM\Column(name="nom_image", type="string", length=255,nullable=true)
     */
    private $nom_image;
    /**
     * 
     * @Assert\File( maxSize = "1024k", mimeTypesMessage = "Please upload a valid Image")
     * @ORM\Column(name="file", type="string", length=255,nullable=true)
     */
    private $file;

    public function getFullImagePath() {
        return null === $this->nom_image ? null : $this->getUploadDir(). $this->nom_image;
    }


    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__. '/../../../../web/'.$this->getUploadDir();
    }
    public function getUploadDir()
    {

        return 'images/';
    }
   
    public function uploadImage() {

            $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

            $this->nom_image= $this->file->getClientOriginalName();
        
        $this->file=null;
    }


    

    /**
     * Set nomImage
     *
     * @param string $nomImage
     *
     * @return blog
     */
    public function setNomImage($nomImage)
    {
        $this->nom_image =$nomImage;

        return $this;
    }

    /**
     * Get nomImage
     *
     * @return string
     */
    public function getNomImage()
    {
        return $this->nom_image;
    }

    /**
     * Set file
     *
     * @param string $file
     *
     * @return blog
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Add comment
     *
     * @param \SanteBundle\Entity\Comment $comment
     *
     * @return blog
     */
    public function addComment(\SanteBundle\Entity\Comment $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \SanteBundle\Entity\Comment $comment
     */
    public function removeComment(\SanteBundle\Entity\Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set categorie
     *
     * @param \SanteBundle\Entity\categorie $categorie
     *
     * @return blog
     */
    public function setCategorie(\SanteBundle\Entity\categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \SanteBundle\Entity\categorie
     */
    public function getCategorie()
    {
        return $this->categorie;

    }
    public function __toString()
    {
        return $this->getTitre();
        return $this->getCategorie();
        return $this->comment();
    }

    /**
     * Set idUser
     *
     * @param \SanteBundle\Entity\User $idUser
     *
     * @return blog
     */
    public function setIdUser(\SanteBundle\Entity\User $idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \SanteBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return blog
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }
}
