<?php

namespace MewPipe\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MewPipe\UserBundle\Entity\User;
use MewPipe\VideoBundle\Entity\Video;

/**
 * Comments
 *
 * @ORM\Table("comments")
 * @ORM\Entity(repositoryClass="MewPipe\VideoBundle\Repository\CommentsRepository")
 */
class Comments
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
     * The video
     *
     * @var \MewPipe\VideoBundle\Entity\Video
     *
     * @ORM\ManyToOne(targetEntity="MewPipe\VideoBundle\Entity\Video")
     * @ORM\JoinColumn(name="video_id", referencedColumnName="id", nullable=false)
     */
    protected $video;

    /**
     * The user holder
     *
     * @var \MewPipe\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MewPipe\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    protected $user;

    /**
     * @var string
     *
     * @ORM\Column(name="comment1", type="string", length=255, nullable=false)
     */
    private $comment1;

    /**
     * @var string
     *
     * @ORM\Column(name="comment2", type="string", length=255, nullable=true)
     */
    private $comment2;

    /**
     * @var string
     *
     * @ORM\Column(name="comment3", type="string", length=255, nullable=true)
     */
    private $comment3;


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
     * Set comment1
     *
     * @param string $comment1
     *
     * @return Comments
     */
    public function setComment1($comment1)
    {
        $this->comment1 = $comment1;

        return $this;
    }

    /**
     * Get comment1
     *
     * @return string
     */
    public function getComment1()
    {
        return $this->comment1;
    }

    /**
     * Set comment2
     *
     * @param string $comment2
     *
     * @return Comments
     */
    public function setComment2($comment2)
    {
        $this->comment2 = $comment2;

        return $this;
    }

    /**
     * Get comment2
     *
     * @return string
     */
    public function getComment2()
    {
        return $this->comment2;
    }

    /**
     * @return Video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param Video $video
     * @return Comments
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Comments
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment3()
    {
        return $this->comment3;
    }

    /**
     * @param string $comment3
     * @return Comments
     */
    public function setComment3($comment3)
    {
        $this->comment3 = $comment3;
        return $this;
    }

}

