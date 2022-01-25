<?php

abstract class Produit
{
    protected string $nom;
    protected string $image;
    protected array $taille;
    protected float $prix;
    protected string $ingredients;

    public function __construct(string $nom, string $image, float $prix, array $taille, string $ingredients)
    {
        $this->nom = $nom;
        $this->image = $image;
        $this->taille = $taille;
        $this->prix = $prix;
        $this->ingredients = $ingredients;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getPrix()
    {
        return $this->prix ;
    }
    public function getTaille()
    {
        return $this->taille;
    }
    public function getIngredients()
    {
        return $this->ingredients;
    }
}

class Pizza extends Produit
{
    public function __construct(string $nom, string $image, float $prix, array $taille, string $ingredients)
    {
        parent::__construct($nom, $image, $prix, $taille, $ingredients);
    }
}


$taille = ["20 cm", "30 cm", "40 cm"];

$margarita = new Pizza("margarita", "images/pizza-carte-menu.png", 5.10, $taille, "Tomate, fromage, origan");

//var_dump($margarita);


// class Paninis extends Produit{}