<?php

require_once "Produits.php";
require_once "Pizza.php";

class Prix
{
    public float $prix;
    public string $type;
    public function __construct(float $prix, string $type)
    {
        $this->prix = $prix;
        $this->type = $type;
    }
    public function getPrix()
    {
        return number_format($this->prix, 2);    
    }
    public function getType()
    {
        return $this->type;
    }
}
