<?php

require_once "head.php";
require_once "navigation.php";
require_once "Article.php";

?>
<main id="contenu-blog" class="container">

    <h2>Blog</h2>

    <?php foreach ($articles as $article) { ?>
        <article class="article-blog">
            <figure class="taille-image-blog"><img src="<?= $article->affichageImage() ?>" alt=""></figure>
            <h3><?= $article->affichageTitre() ?></h3>
            <p><?= $article->affichageAccroche() ?></p>
            <p><a href="article-blog.php?id=<?= array_search($article, $articles) ?>">En savoir plus</a></p>
            <!-- <p><a href="<?= $article->getLien() ?>">En savoir plus</a></p> -->
        </article>
    <?php } ?>
</main>

<?php require_once "footer.php"; ?>