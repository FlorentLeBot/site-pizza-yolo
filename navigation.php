<header id="bandeau">

    <!-- le menu burger  -->

    <div class="menu-wrap">

        <input type="checkbox" class="toggler " />
        <div class="hamburger">

            <!-- div permettant de creer les lignes du burger -->

            <div></div>
        </div>

        <!-- le menu -->

        <div class="menu">

            <div class="menus container">


                <!-- menu principal -->

                <nav id="menu-principal">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="carte-menu.php">Menu</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>


                <!-- menu php -->

                <nav id="menu-php">
                    <ul>
                        <li><a href="#connexion.php" title="Se connecter"><i class="fa fa-user-circle" aria-hidden="true"></i>
                            </a></li>
                        <li><a href="#inscription.php" title="S'inscrire"><i class="fas fa-pen"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <!-- contenu du bandeau -->

    <div id="contenu-bandeau" class="container">
        <figure class="taille-image-logo">
            <a href="index.php">
                <img src="images/logo.png" alt="logo" class="logo">
            </a>
        </figure>
        <div>
            <h1>Bienvenue</h1>
            <p>Ouvert 7j/7</p>
            <p><a href="#horaires" class="js-modal "> Horaires</a></p>
            
            
            
            <section id="horaires" class="modal" aria-hidden="true" role="dialog" aria-labelledby="#titleModal" style="display:none">
                <div class="modal-wrapper js-modal-stop">
                    <button class="js-modal-close">x</button>
                    <h2>Nos horaires d'ouverture</h2>

                    <table>
                        <tr>
                            <td>Lundi</td>
                            <td>11h30-13h30</td>
                            <td>18h00-22h00</td>
                        </tr>
                        <tr>
                            <td>Mardi</td>
                            <td>11h30-13h30</td>
                            <td>18h00-22h00</td>
                        </tr>
                        <tr>
                            <td>Mercredi </td>
                            <td>11h30-13h30</td>
                            <td>18h00-22h00</td>
                        </tr>
                        <tr>
                            <td>Jeudi</td>
                            <td>11h30-13h30</td>
                            <td>18h00-22h00</td>
                        </tr>
                        <tr>
                            <td>Vendredi</td>
                            <td>11h30-13h30</td>
                            <td>18h00-22h00</td>
                        </tr>
                        <tr>
                            <td>Samedi</td>
                            <td>11h30-13h30</td>
                            <td>18h00-22h00</td>
                        </tr>
                        <tr>
                            <td>Dimanche</td>
                            <td> </td>
                            <td>18h00-22h00</td>
                        </tr>
                    </table>


                </div>
            </section>

        </div>
    </div>

    <!-- les boutons du menu -->

    <section id="boutons-menu">
        <div class=" bouton"><a href="#commande-en-ligne.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></div>
        <div class="bouton"><a href="#tel"><i class="fas fa-phone"></i></a></div>
        <div class="bouton"><a href="carte-menu.php"><i class="fas fa-pizza-slice"></i></a></div>
    </section>

    <script src="boite-modale.js"></script>
</header>