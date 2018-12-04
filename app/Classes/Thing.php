<?php


namespace App\Classes;

class Thing {
    private $id;
    private $nbBricks;
    private $name;
    private $color;

    /**
     * Thing constructor
     * @param $id
     * @param $name
     * @param $nbBricks
     * @param $color
     */
    public function __construct($id, $nbBricks, $name, $color) {
        $this->id = $id;
        $this->nbBricks = $nbBricks;
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nbBricks
     */ 
    public function getNbBricks()
    {
        return $this->nbBricks;
    }

    /**
     * Set the value of nbBricks
     *
     * @return  self
     */ 
    public function setNbBricks($nbBricks)
    {
        $this->nbBricks = $nbBricks;

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
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}