<?php

require_once "head.php";
require_once "navigation.php";

?>

<main id="contenu-contact" class="container">

    <!-- la carte de géolocalitation -->

    <!-- <iframe class="carte-geolocalitation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42768.76249899805!2d-4.364231172850573!3d47.93546187705521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4817261462354ed5%3A0x40ca5cd36e56440!2s29720%20Plovan!5e0!3m2!1sfr!2sfr!4v1637667340741!5m2!1sfr!2sfr" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->

    <!-- la section nous contacter -->

    <section class="nous-contacter">


        <section id="adresses">
            <h2>Nous contacter</h2>

            <div class="adresse">
                <h3>Pizza Yolo Lorient</h3>
                <address>2 Rue de Chez Moi</address>
                <p><a href="tel:+33234567891"><i class="fas fa-phone"></i>02 34 56 78 91</a></p>
            </div>
            <div class="adresse">
                <h3>Pizza Yolo Vannes</h3>
                <address>5 Rue de Chez Moi</address>
                <p><a href="tel:+33123456789"><i class="fas fa-phone"></i>01 23 45 67 89</a></p>
            </div>
        </section>


    <!-- le formulaire de contact -->

    <section id="formulaire-de-contact">

        <form id="#formulaire" method="post" action="traitement.php">
            <fieldset class="section">
                <legend>Laissez-nous un message</legend>

                <p class="civilite"><label for="civilite" class="petit">M.</label>
                    <input type="radio" name="civilite" id="civilite" value="M">

                    <label for="civilite">Mme</label>
                    <input type="radio" name="civilite" id="civilite" value="Mme" checked>
                </p>

                <p><label for="prenom">Entrez votre prénom </label>
                    <input type="text" id="prenom" name="prenom" placeholder="prénom">
                </p>

                <p><label for="nom">Entrez votre nom </label>
                    <input type="text" id="nom" name="nom" placeholder="nom">
                </p>

                <p><label for="address">Entrez votre adresse</label>
                    <input id="address" type="text" id="address" name="address" placeholder="adresse">
                    <div id="mes-adresses"></div>
                </p>


                <p><label for="email">Entrez votre email </label>
                    <input type="email" id="email" name="email" placeholder="email">   
                </p>


                <p><label for="message">Entrez votre message </label>
                    <textarea name="message" rows="5" id="message" placeholder="votre message">
                    </textarea>
                </p>

                <p><input type="submit" value="Envoyer"></p>


            </fieldset>
        </form>
    </section>


</main>

<?php require_once "footer.php"; ?>