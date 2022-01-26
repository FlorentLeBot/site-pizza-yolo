<?php

require_once "Produits.php";

class Burger extends Produits
{
    public function __construct(string $nom, string $image, array $prix, string $taille, string $ingredients)
    {
        parent::__construct($nom, $image, $prix, $taille, $ingredients);
    }
}