<?php

abstract class Produits
{
    protected string $nom;
    protected string $image;
    protected string $taille;
    protected array $tableauPrix;
    protected string $ingredients;

    public function __construct(string $nom, string $image, array $tableauPrix, string $taille, string $ingredients)
    {
        $this->nom = $nom;
        $this->image = $image;
        $this->taille = $taille;
        $this->prix = $tableauPrix;
        $this->ingredients = $ingredients;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function getTableauPrix(): array
    {
        return $this->prix;
    }
    public function getTaille(): string
    {
        return $this->taille;
    }
    public function getIngredients(): string
    {
        return $this->ingredients;
    }
}


// class Paninis extends Produits{}
