
<?php

require_once "code-client.php";

class Article
{ 
    public function __construct(private int $id, private string $titre, private string $image, private string $accroche, private string $contenu, private string $lien)
    {}
    
    public function getId():int
    {
        return $this->id;
    }
    public function affichageTitre():string
    {
        return $this->titre;
    }
    public function affichageImage():string
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


