<?php

namespace MewPipe\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MewPipe\UserBundle\Entity\User;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Video
 *
 * @ORM\Table("video_file")
 * @ORM\Entity(repositoryClass="MewPipe\VideoBundle\Repository\VideoRepository")
 * @Gedmo\Uploadable(filenameGenerator="SHA1", maxSize="50000000")
 */
class Video
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="views", type="integer")
     */
    private $views;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="path_to_image", type="string", length=255, nullable=true)
     */
    private $pathToImage;

    /**
     * Path to the imported file
     *
     * @var string
     *
     * @Gedmo\UploadableFilePath
     * @ORM\Column(name="path", type="string", nullable=true)
     */
    protected $path;

    /**
     * Name of the imported file
     *
     * @var string
     *
     * @Gedmo\UploadableFileName
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    protected $name;

    /**
     * Mime type of the imported file
     *
     * @var string
     *
     * @Gedmo\UploadableFileMimeType
     * @ORM\Column(name="mime_type", type="string", nullable=true)
     */
    protected $mimeType;

    /**
     * Size of the imported file
     *
     * @var float
     *
     * @Gedmo\UploadableFileSize
     * @ORM\Column(name="size", type="decimal", nullable=true)
     */
    protected $size;

    /**
     * The file to be upload
     *
     * @var UploadedFile
     */
    protected $file;

    /**
     * The creation date
     *
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->views = 0;
    }

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
     * Set title
     *
     * @param string $title
     *
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Video
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
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return Video
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Video
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param float $size
     * @return Video
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     * @return Video
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadedFile $file
     * @return Video
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Video
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
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
     * @return Video
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     * @return Video
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getPathToImage()
    {
        return $this->pathToImage;
    }

    /**
     * @param string $pathToImage
     * @return Video
     */
    public function setPathToImage($pathToImage)
    {
        $this->pathToImage = $pathToImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param string $views
     * @return Video
     */
    public function setViews($views)
    {
        $this->views = $views;
        return $this;
    }



}

