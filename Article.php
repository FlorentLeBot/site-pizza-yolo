
<?php

require_once "find.php";

class Article
{
    private int $id;
    private string $titre;
    private string $image;
    private string $accroche;
    private string $contenu;
    private string $lien;

    public function __construct(int $id, string $titre, string $image, string $accroche, string $contenu, string $lien)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->image = $image;
        $this->accroche = $accroche;
        $this->contenu = $contenu;
        $this->lien = $lien;
    }

    public function getId()
    {
        return $this->id;
    }
    public function affichageTitre()
    {
        return $this->titre;
    }
    public function affichageImage()
    {
        return $this->image;
    }
    public function affichageAccroche()
    {
        return $this->accroche;
    }
    public function affichageContenu()
    {
        return $this->contenu;
    }
    public function getLien()
    {
        return $this->lien;
    }
}


