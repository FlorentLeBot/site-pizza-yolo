<?php

class Produit
{
    private string $nom;
    private string $image;
    private float $prix;
    private string $ingredient;
    public function __construct($nom, $image, $prix, $ingredient)
    {
        $this->nom = $nom;
        $this->image = $image;
        $this->prix = $prix;
        $this->ingredient = $ingredient;
    }
}

// class Pizza extends Produit{}
// class Paninis extends Produit{}