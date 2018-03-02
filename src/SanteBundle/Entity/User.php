<?php
/**
 * Created by PhpStorm.
 * User: sysiph
 * Date: 07/02/2018
 * Time: 08:22
 */

namespace SanteBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Model\UserNotificationInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="SanteBundle\Repository\produitRepository")
 * @ORM\Entity(repositoryClass="SanteBundle\Repository\MedcinRepository")
 */
class User extends BaseUser implements UserNotificationInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    protected $lastname;
    /**
     * @var Notification
     * @ORM\OneToMany(targetEntity="SanteBundle\Entity\Notification", mappedBy="user", orphanRemoval=true ,cascade={"persist"})
     */
    protected $notifications;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * {@inheritdoc}
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * {@inheritdoc}
     */
    public function addNotification($notification)
    {
        if (!$this->notifications->contains($notification)) {
            $this->notifications[] = $notification;
            $notification->setUser($this);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeNotification($notification)
    {
        if ($this->notifications->contains($notification)) {
            $this->notifications->removeElement($notification);
        }

        return $this;
    }
    /**
     * {@inheritdoc}
     */
    public function getIdentifier()
    {
        $this->getId();
    }
    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @var UploadedFile
     */
    public $file ;
}