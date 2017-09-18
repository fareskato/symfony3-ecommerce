<?php

namespace Fares\CatalogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="Fares\CatalogBundle\Repository\CategoryRepository")
 */
class Category
{

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string", name="title", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", name="url_key", length=255, unique=true)
     */
    private $url_key;

    /**
     * @ORM\Column(type="text", name="description", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", name="image", nullable=true)
     * @Assert\File(mimeTypes={ "image/png", "image/jpeg" },mimeTypesMessage="Please upload the PNG or JPEG image
    file.")
     */
    private $image;

    /**
     * one to many with products
     * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
     */
    private $products;

    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->getTitle();
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
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrlKey()
    {
        return $this->url_key;
    }

    /**
     * @param mixed $url_key
     * @return $this
     */
    public function setUrlKey($url_key)
    {
        $this->url_key = $url_key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

}

