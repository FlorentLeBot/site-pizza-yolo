<?php

require_once "head.php";
require_once "navigation.php";

?>  

    <main id="contenu-accueil" class="container">

        <!-- le slider -->

        <section id="slider" class="container">

            <input class="radio-size" type="radio" name="slider" id="slide-1" checked>
            <input type="radio" name="slider" id="slide-2">
            <input type="radio" name="slider" id="slide-3">
            <input type="radio" name="slider" id="slide-4">
            <input type="radio" name="slider" id="slide-5">

            <label for="slide-1" class="img-size" id="slide1"><img src="images/slider-1.png" alt="pizza"></label>
            <label for="slide-2" class="img-size" id="slide2"><img src="images/slider-2.png" alt="pizza"></label>
            <label for="slide-3" class="img-size" id="slide3"><img src="images/slider-3.png" alt="pizza"></label>
            <label for="slide-4" class="img-size" id="slide4"><img src="images/slider-4.png" alt="pizza"></label>
            <label for="slide-5" class="img-size" id="slide5"><img src="images/img-pizza-1-mini.jpg"
                    alt="pizza"></label>

        </section>

        <!-- la présentation -->

        <article id="presentation" class="forme">

            <h2>30 ans d'expérience</h2>
            <p>Installés depuis 1982, Frédéric et Julien mettent tout leur savoir-faire à votre service pour vous
                proposer de délicieux paninis, de copieux burgers et succulentes lasagnes et, bien sûr, leurs
                fameuses pizzas ! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus minus
                consequuntur repellat neque tempore officia illo hic! Distinctio temporibus odit incidunt. Corrupti
                totam dolores voluptates quasi deleniti illo debitis iusto quas ex possimus aliquam molestiae magni
                assumenda, maiores aperiam itaque nostrum culpa blanditiis ea praesentium. Ratione amet nobis
                perferendis reiciendis?</p>
        </article>


        <!-- les catégories -->

        <section id="categories">
            <article class="categorie">
                <a href="carte-menu.html">
                    <h2>La carte</h2>
                    <img src="images/carte-des-pizzas.png" alt="la-carte">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti nobis repudiandae amet
                        asperiores fuga, quas ullam voluptatum! Amet, iusto.</p>
                </a>
            </article>
            <article class="categorie ">
                <a href="blog.html">
                    <h2>La pizza du mois</h2>
                    <img src="images/image-blog-accueil.png" alt="pizza-du-mois">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti nobis repudiandae amet
                        asperiores fuga, quas ullam voluptatum! Amet, iusto.</p>
                </a>
            </article>
            <article class="categorie">
                <a href="blog.html">
                    <h2>Blog</h2>
                    <img src="images/image-blog.png" alt="blog">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti nobis repudiandae amet
                        asperiores fuga, quas ullam voluptatum! Amet, iusto.</p>
                </a>
            </article>

        </section>

        <section id="avis">

            <h2>L'avis de nos clients</h2>

            <article class="avis">
                <h3>Liza</h3>
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quo, natus facilis veritatis vitae
                    aspernatur molestiae similique soluta reiciendis perspiciatis!</p>
            </article>
            <article class="avis">
                <h3>Jean</h3>
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, inventore.</p>
            </article>
            <article class="avis">
                <h3>Florent</h3>
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci officia quidem temporibus incidunt
                    consequatur vitae.</p>
            </article>

        </section>

    </main>

    <?php require_once "footer.php"; ?>

    