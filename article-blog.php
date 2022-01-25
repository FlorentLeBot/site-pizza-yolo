<?php
require_once("head.php");
require_once("navigation.php");
require_once("Article.php");
$id = (int)$_GET["id"];
?>
<main id="article-1" class="container">

    <img src=<?= $articles[$id]->affichageImage() ?>>

    <h2><?= $articles[$id]->affichageTitre() ?></h2>

    <p><?= $articles[$id]->affichageContenu() ?></p>

</main>
<?php
require_once("footer.php");
?>