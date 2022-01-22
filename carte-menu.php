<?php
require_once "head.php";
require_once "navigation.php";
?>

<main id="contenu-carte-menu" class="container">
    <h2>Notre carte</h2>

    <nav>
        <ul>
            <li id="btnPizzas" class="btnHover"><a href="#pizzas">Pizzas</a></li>
            <li id="btnBurgers" class="btnHover"><a href="#burgers">Burgers</a></li>
            <li id="btnPaninis" class="btnHover"><a href="#les-paninis">Paninis</a></li>
            <li id="btnBoissons" class="btnHover"><a href="#boissons">Boissons</a></li>
        </ul>
    </nav>


    <?php require_once "pizzas.php"; ?> 
    <?php require_once "hamburgers.php"; ?>
    <?php require_once "paninis.php"; ?>
    <?php require_once "boissons.php"; ?> 
    <?php require_once "footer.php"; ?>