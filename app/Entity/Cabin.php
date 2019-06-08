<?php

namespace App\Entity;

use App\Entity\Feature;
use App\Entity\Service;

class Cabin {
    
    private $identifier;
    private $name;
    private $description;
    private $features;
    private $services;
    private $images;

    function __construct() {
        $this->images = array();
        $this->features = array();
        $this->services = array();
    }

    /**
     * Get the value of identifier
     */ 
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set the value of identifier
     *
     * @return  self
     */ 
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of services
     */ 
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set the value of services
     *
     * @return  self
     */ 
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get the value of images
     */ 
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set the value of images
     *
     * @return  self
     */ 
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Add a new image
     * 
     */
    public function addImage(String $image){
        array_push($this->images, $image);
    }

    /**
     * Get the value of features
     */ 
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Set the value of features
     *
     * @return  self
     */ 
    public function setFeatures($features)
    {
        $this->features = $features;

        return $this;
    }

    public function addService(Service $service){
        array_push($this->services, $service);
    }

    public function addFeature(Feature $feature){
        array_push($this->features, $feature);
    }
}