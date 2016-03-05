<?php

namespace Avi\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="Avi\Bundle\JobBundle\Repository\CategoryRepository")
 */
class Category {

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, unique=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=300, nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="imgalt", type="string", length=255, nullable=true)
     */
    private $imgalt;

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="integer")
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=300)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=300)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime")
     */
    private $dateModified;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     @Assert\File(
     *     maxSize = "5M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png", "image/tiff"},
     *     maxSizeMessage = "The maxmimum allowed file size is 5MB.",
     *     mimeTypesMessage = "Only the filetypes image are allowed."
     * )
     */
    private $file;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Category
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Category
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Category
     */
    public function setImg($img) {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg() {
        return $this->img;
    }

    /**
     * Set imgalt
     *
     * @param string $imgalt
     *
     * @return Category
     */
    public function setImgalt($imgalt) {
        $this->imgalt = $imgalt;

        return $this;
    }

    /**
     * Get imgalt
     *
     * @return string
     */
    public function getImgalt() {
        return $this->imgalt;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return Category
     */
    public function setParent($parent) {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return int
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Category
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Category
     */
    public function setKeywords($keywords) {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords() {
        return $this->keywords;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Category
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Category
     */
    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return Category
     */
    public function setDateModified($dateModified) {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified() {
        return $this->dateModified;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Category
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus() {
        return $this->status;
    }

    public function getAbsolutePath() {
        return null === $this->img ? null : $this->getUploadRootDir() . '/' . $this->img;
    }

    public function getWebPath() {
        return null === $this->img ? null : $this->getUploadDir() . '/' . $this->img;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/images';
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the
        // target filename to move to
        
        $file=$this->getFile();
        
        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
        //$imgDir = $this->container->getParameter('kernel.root_dir') . '/../web/uploads/images';


        $this->getFile()->move(
                $this->getUploadRootDir(), $fileName
        );

        // set the path property to the filename where you've saved the file
        $this->img = $fileName;

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

}
