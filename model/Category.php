<?php

class Category
{
    private $id;
    private $name;
    private $description;
    private $numberCat;

    public function __construct($id = null, $name = null, $description = null, $numberCat = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->numberCat = $numberCat;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getNumberCat()
    {
        return $this->numberCat;
    }

    public function setNumberCat($numberCat)
    {
        $this->numberCat = $numberCat;
    }
}