<?php

namespace App;

class Personnage
{
    private $name;
    private $life = 0;
    private $armor = 0;
    private $atk = 0;

    public function __construct(string $name, int $life, int $atk = 0, int $armor = 0)
    {
        $this->name = $name;
        $this->life = $life;
        $this->atk = $atk;
        $this->armor = $armor;
    }

    /**
     * Get the value of life
     */ 
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */ 
    public function setLife(int $life)
    {
        $this->life = $life;

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
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of armor
     */ 
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set the value of armor
     *
     * @return  self
     */ 
    public function setArmor(int $armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * Get the value of atk
     */ 
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * Set the value of atk
     *
     * @return  self
     */ 
    public function setAtk(int $atk)
    {
        $this->atk = $atk;

        return $this;
    }
}