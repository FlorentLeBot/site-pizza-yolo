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
                            <li><a href="#connexion.php" title="Se connecter"><i class="fa fa-user-circle"
                                        aria-hidden="true"></i>
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
                <p><a href="contact.php#horaires"> Horaires</a></p>
            </div>
        </div>

        <!-- les boutons du menu -->

        <section id="boutons-menu">
            <div class=" bouton"><a href="#commande-en-ligne.php"><i class="fa fa-cart-arrow-down"
                        aria-hidden="true"></i></a></div>
            <div class="bouton"><a href="#tel"><i class="fas fa-phone"></i></a></div>
            <div class="bouton"><a href="carte-menu.php"><i class="fas fa-pizza-slice"></i></a></div>
        </section>
    </header>