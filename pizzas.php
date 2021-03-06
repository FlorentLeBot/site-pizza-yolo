<?php

require_once "code-client.php";

?>


<section id="pizza" class="items">

    <h3 id="pizzas">Pizzas</h3>
    <?php foreach ($pizzas as $pizza) { ?>
        <article class="pizza">
            <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
            <h4><?= $pizza->getNom() ?></h4>
            <hr>
            <p><?= $pizza->getIngredients() ?></p>
            <p class="taille-pizza"><?= $pizza->getTaille() ?></p>
            <p class="prix"><?= $pizza->getTableauPrix()[0]->getPrix() . "€ " . $pizza->getTableauPrix()[1]->getPrix() . "€ " . $pizza->getTableauPrix()[2]->getPrix() . "€" ?></p>
        </article>
    <?php } ?>

    <!-- <article class="pizza">
        <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
        <h4>MARGARITA + </h4>
        <hr>
        <p>Tomate, fromage + un ingrédient au choix (épaule ou champignons ou chorizo ou merguez ou poitrine
            fumée ou anchois) </p>
        <p class="taille-pizza">20cm 30cm 40cm</p>
        <p class="prix">5,10€ 7,80€ 12,60€</p>
    </article>

    <article class="pizza">
        <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
        <h4>4 FROMAGES </h4>
        <hr>
        <p> Tomate, fromage, gorgonzola, chèvre, reblochon, tomates fraîches olives, origan </p>
        <p class="taille-pizza">20cm 30cm 40cm</p>
        <p class="prix">5,10€ 7,80€ 12,60€</p>
    </article>

    <article class="pizza">
        <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
        <h4>TONITO</h4>
        <hr>
        <p> Tomate, fromage, sauce*, épaule, oignons, olives, origan</p>
        <p class="taille-pizza">20cm 30cm 40cm</p>
        <p class="prix">5,10€ 7,80€ 12,60€</p>
    </article>

    <article class="pizza">
        <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
        <h4> STROMBOLI</h4>
        <hr>
        <p>Tomate, fromage, chorizo, oignons, poivrons, origan</p>
        <p class="taille-pizza">20cm 30cm 40cm</p>
        <p class="prix">5,10€ 7,80€ 12,60€</p>
    </article>

    <article class="pizza">
        <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
        <h4>CAMPAGNARDE</h4>
        <hr>
        <p>Tomate, fromage, champignons, poitrine fumée, olives, origan </p>
        <p class="taille-pizza">20cm 30cm 40cm</p>
        <p class="prix">5,10€ 7,80€ 12,60€</p>
    </article>

    <article class="pizza">
        <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
        <h4>4 SAISONS </h4>
        <hr>
        <p>Tomate, fromage, artichaut, épaule, champignons, olives, origan </p>
        <p class="taille-pizza">20cm 30cm 40cm</p>
        <p class="prix">5,10€ 7,80€ 12,60€</p>
    </article>

    <article class="pizza">
        <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
        <h4>PIQUANTE</h4>
        <hr>
        <p> Tomate, fromage, chorizo, merguez, olives, origan </p>
        <p class="taille-pizza">20cm 30cm 40cm</p>
        <p class="prix">5,10€ 7,80€ 12,60€</p>
    </article>

    <article class="pizza">
        <img src="images/pizza-carte-menu.png" alt="pizza-image-carte-menu">
        <h4>ROYALE </h4>
        <hr>
        <p>Tomate, fromage, épaule, champignons, olives, origan </p>
        <p class="taille-pizza">20cm 30cm 40cm</p>
        <p class="prix">5,10€ 7,80€ 12,60€</p>
    </article> -->

</section>