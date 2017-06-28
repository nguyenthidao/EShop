<?php
class Product{

    private $id;
    private $name;
    private $color;
    private $price;
    private $quality;
    private $ram;
    private $keyboard;
    private $display;
    private $hard_drive;
    private $wireless;
    private $description;
    private $brands_id;

    public function __construct($id, $name, $color, $price, $quality, $ram, $keyboard, $display, $hard_drive, $wireless, $description, $brands_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->quality = $quality;
        $this->ram = $ram;
        $this->keyboard = $keyboard;
        $this->display = $display;
        $this->hard_drive = $hard_drive;
        $this->wireless = $wireless;
        $this->description = $description;
        $this->brands_id = $brands_id;
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

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQuality()
    {
        return $this->quality;
    }

    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    public function getKeyboard()
    {
        return $this->keyboard;
    }

    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
    }

    public function getDisplay()
    {
        return $this->display;
    }

    public function setDisplay($display)
    {
        $this->display = $display;
    }

    public function getHardDrive()
    {
        return $this->hard_drive;
    }

    public function setHardDrive($hard_drive)
    {
        $this->hard_drive = $hard_drive;
    }

    public function getWireless()
    {
        return $this->wireless;
    }

    public function setWireless($wireless)
    {
        $this->wireless = $wireless;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getBrandsId()
    {
        return $this->brands_id;
    }

    public function setBrandsId($brands_id)
    {
        $this->brands_id = $brands_id;
    }
}