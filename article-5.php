<?php
require_once("head.php");
require_once("navigation.php");
require_once("Article.php");
?>
<main id="article-5" class="container">

    <img src="images/hamburger.jpg" alt="image-article-6">

    <?php foreach ($articles as $article) {
            if ($article->getId() === 5) {
        ?> <h2><?= $article->affichageTitre() ?></h2>

        <p><?= $article->affichageContenu() ?></p>

    <?php } ?>
<?php } ?>
</main>

<?php
require_once("footer.php");
?>