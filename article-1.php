<?php
require_once("head.php");
require_once("navigation.php");
require_once("Article.php");
?>
<main id="article-1" class="container">

    <img src="images/img-pizza-1-mini.jpg" alt="image-pizza">
    <?php foreach ($articles as $article) {
        if ($article->getId() === 1) {
    ?>
            <h2><?= $article->affichageTitre() ?></h2>

            <p><?= $article->affichageContenu() ?></p>

        <?php } ?>
    <?php } ?>
</main>
<?php
require_once("footer.php");
?>