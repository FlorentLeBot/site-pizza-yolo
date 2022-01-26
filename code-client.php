<?php
require_once "Article.php";
require_once "Pizza.php";
require_once "Produits.php";
require_once "Prix.php";

// création des articles

$article1 = new Article(
    1,
    "La pizza du mois de novembre",
    "images/img-pizza-1-mini.jpg",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, expedita.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, laboriosam illum? Sit dolor illo iusto, dolorum eos suscipit. Odio incidunt distinctio expedita reprehenderit est maiores aperiam molestias repudiandae deleniti cumque architecto rerum cum eveniet, in temporibus sint nobis officia magnam omnis nesciunt corporis. Rem adipisci a, sit deleniti accusamus nulla vero deserunt asperiores natus eveniet accusantium quos blanditiis alias commodi consequuntur. Reiciendis sint quae accusamus voluptas eveniet ut placeat ex neque ratione nostrum laudantium, ipsa possimus maxime nulla? Quis illum sint natus, maxime voluptate quidem incidunt. Nam, maiores dicta molestiae dolorum architecto nobis non maxime voluptatem voluptatum libero distinctio alias corporis temporibus quo facere qui tempore corrupti illum asperiores fugit earum possimus voluptas! Quasi minima quas quaerat obcaecati sunt maxime quis? Provident quae fugit dolorem amet voluptate doloremque totam labore vitae sed, dolore dolor. Asperiores, rerum! Ipsa autem ipsam sed similique? Debitis numquam odit magnam similique necessitatibus, explicabo ullam cum placeat. Nobis facere eum dignissimos nemo ducimus repudiandae ullam facilis reprehenderit excepturi, quo minima, nisi, cupiditate recusandae. Aliquam accusamus porro natus eligendi quasi obcaecati quos et rem at aperiam molestiae eum doloremque omnis eaque earum quod, neque totam velit deserunt expedita pariatur, ea, dolorum ut nihil? Hic officiis, praesentium porro dignissimos harum totam, maxime ratione sequi earum quaerat ab architecto a, sunt nam ipsa beatae? Pariatur perspiciatis quas iure deserunt inventore totam vel unde vitae quo, nemo consectetur accusamus quam odit tempora officiis incidunt cum expedita consequatur perferendis esse suscipit, soluta voluptas! Iure cupiditate eius molestias qui molestiae consectetur consequatur ipsum odio aliquam, similique nihil inventore sed excepturi reprehenderit blanditiis? ",
    "article-1.php"
);
$article2 = new Article(
    2,
    "La pizza du mois de Septembre",
    "images/slider-1.png",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, expedita.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, laboriosam illum? Sit dolor illo iusto, dolorum eos suscipit. Odio incidunt distinctio expedita reprehenderit est maiores aperiam molestias repudiandae deleniti cumque architecto rerum cum eveniet, in temporibus sint nobis officia magnam omnis nesciunt corporis. Rem adipisci a, sit deleniti accusamus nulla vero deserunt asperiores natus eveniet accusantium quos blanditiis alias commodi consequuntur. Reiciendis sint quae accusamus voluptas eveniet ut placeat ex neque ratione nostrum laudantium, ipsa possimus maxime nulla? Quis illum sint natus, maxime voluptate quidem incidunt. Nam, maiores dicta molestiae dolorum architecto nobis non maxime voluptatem voluptatum libero distinctio alias corporis temporibus quo facere qui tempore corrupti illum asperiores fugit earum possimus voluptas! Quasi minima quas quaerat obcaecati sunt maxime quis? Provident quae fugit dolorem amet voluptate doloremque totam labore vitae sed, dolore dolor. Asperiores, rerum! Ipsa autem ipsam sed similique? Debitis numquam odit magnam similique necessitatibus, explicabo ullam cum placeat. Nobis facere eum dignissimos nemo ducimus repudiandae ullam facilis reprehenderit excepturi, quo minima, nisi, cupiditate recusandae. Aliquam accusamus porro natus eligendi quasi obcaecati quos et rem at aperiam molestiae eum doloremque omnis eaque earum quod, neque totam velit deserunt expedita pariatur, ea, dolorum ut nihil? Hic officiis, praesentium porro dignissimos harum totam, maxime ratione sequi earum quaerat ab architecto a, sunt nam ipsa beatae? Pariatur perspiciatis quas iure deserunt inventore totam vel unde vitae quo, nemo consectetur accusamus quam odit tempora officiis incidunt cum expedita consequatur perferendis esse suscipit, soluta voluptas! Iure cupiditate eius molestias qui molestiae consectetur consequatur ipsum odio aliquam, similique nihil inventore sed excepturi reprehenderit blanditiis? ",
    "article-2.php"
);
$article3 = new Article(
    3,
    "Recette de kouign amann",
    "images/slider-2.png",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, expedita.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, laboriosam illum? Sit dolor illo iusto, dolorum eos suscipit. Odio incidunt distinctio expedita reprehenderit est maiores aperiam molestias repudiandae deleniti cumque architecto rerum cum eveniet, in temporibus sint nobis officia magnam omnis nesciunt corporis. Rem adipisci a, sit deleniti accusamus nulla vero deserunt asperiores natus eveniet accusantium quos blanditiis alias commodi consequuntur. Reiciendis sint quae accusamus voluptas eveniet ut placeat ex neque ratione nostrum laudantium, ipsa possimus maxime nulla? Quis illum sint natus, maxime voluptate quidem incidunt. Nam, maiores dicta molestiae dolorum architecto nobis non maxime voluptatem voluptatum libero distinctio alias corporis temporibus quo facere qui tempore corrupti illum asperiores fugit earum possimus voluptas! Quasi minima quas quaerat obcaecati sunt maxime quis? Provident quae fugit dolorem amet voluptate doloremque totam labore vitae sed, dolore dolor. Asperiores, rerum! Ipsa autem ipsam sed similique? Debitis numquam odit magnam similique necessitatibus, explicabo ullam cum placeat. Nobis facere eum dignissimos nemo ducimus repudiandae ullam facilis reprehenderit excepturi, quo minima, nisi, cupiditate recusandae. Aliquam accusamus porro natus eligendi quasi obcaecati quos et rem at aperiam molestiae eum doloremque omnis eaque earum quod, neque totam velit deserunt expedita pariatur, ea, dolorum ut nihil? Hic officiis, praesentium porro dignissimos harum totam, maxime ratione sequi earum quaerat ab architecto a, sunt nam ipsa beatae? Pariatur perspiciatis quas iure deserunt inventore totam vel unde vitae quo, nemo consectetur accusamus quam odit tempora officiis incidunt cum expedita consequatur perferendis esse suscipit, soluta voluptas! Iure cupiditate eius molestias qui molestiae consectetur consequatur ipsum odio aliquam, similique nihil inventore sed excepturi reprehenderit blanditiis? ",
    "article-3.php"
);
$article4 = new Article(
    4,
    "Nouveau paninis",
    "images/slider-4.png",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, expedita.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, laboriosam illum? Sit dolor illo iusto, dolorum eos suscipit. Odio incidunt distinctio expedita reprehenderit est maiores aperiam molestias repudiandae deleniti cumque architecto rerum cum eveniet, in temporibus sint nobis officia magnam omnis nesciunt corporis. Rem adipisci a, sit deleniti accusamus nulla vero deserunt asperiores natus eveniet accusantium quos blanditiis alias commodi consequuntur. Reiciendis sint quae accusamus voluptas eveniet ut placeat ex neque ratione nostrum laudantium, ipsa possimus maxime nulla? Quis illum sint natus, maxime voluptate quidem incidunt. Nam, maiores dicta molestiae dolorum architecto nobis non maxime voluptatem voluptatum libero distinctio alias corporis temporibus quo facere qui tempore corrupti illum asperiores fugit earum possimus voluptas! Quasi minima quas quaerat obcaecati sunt maxime quis? Provident quae fugit dolorem amet voluptate doloremque totam labore vitae sed, dolore dolor. Asperiores, rerum! Ipsa autem ipsam sed similique? Debitis numquam odit magnam similique necessitatibus, explicabo ullam cum placeat. Nobis facere eum dignissimos nemo ducimus repudiandae ullam facilis reprehenderit excepturi, quo minima, nisi, cupiditate recusandae. Aliquam accusamus porro natus eligendi quasi obcaecati quos et rem at aperiam molestiae eum doloremque omnis eaque earum quod, neque totam velit deserunt expedita pariatur, ea, dolorum ut nihil? Hic officiis, praesentium porro dignissimos harum totam, maxime ratione sequi earum quaerat ab architecto a, sunt nam ipsa beatae? Pariatur perspiciatis quas iure deserunt inventore totam vel unde vitae quo, nemo consectetur accusamus quam odit tempora officiis incidunt cum expedita consequatur perferendis esse suscipit, soluta voluptas! Iure cupiditate eius molestias qui molestiae consectetur consequatur ipsum odio aliquam, similique nihil inventore sed excepturi reprehenderit blanditiis? ",
    "article-4.php"
);
$article5 = new Article(
    5,
    "Le burger du mois d'août",
    "images/slider-3.png",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, expedita.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, laboriosam illum? Sit dolor illo iusto, dolorum eos suscipit. Odio incidunt distinctio expedita reprehenderit est maiores aperiam molestias repudiandae deleniti cumque architecto rerum cum eveniet, in temporibus sint nobis officia magnam omnis nesciunt corporis. Rem adipisci a, sit deleniti accusamus nulla vero deserunt asperiores natus eveniet accusantium quos blanditiis alias commodi consequuntur. Reiciendis sint quae accusamus voluptas eveniet ut placeat ex neque ratione nostrum laudantium, ipsa possimus maxime nulla? Quis illum sint natus, maxime voluptate quidem incidunt. Nam, maiores dicta molestiae dolorum architecto nobis non maxime voluptatem voluptatum libero distinctio alias corporis temporibus quo facere qui tempore corrupti illum asperiores fugit earum possimus voluptas! Quasi minima quas quaerat obcaecati sunt maxime quis? Provident quae fugit dolorem amet voluptate doloremque totam labore vitae sed, dolore dolor. Asperiores, rerum! Ipsa autem ipsam sed similique? Debitis numquam odit magnam similique necessitatibus, explicabo ullam cum placeat. Nobis facere eum dignissimos nemo ducimus repudiandae ullam facilis reprehenderit excepturi, quo minima, nisi, cupiditate recusandae. Aliquam accusamus porro natus eligendi quasi obcaecati quos et rem at aperiam molestiae eum doloremque omnis eaque earum quod, neque totam velit deserunt expedita pariatur, ea, dolorum ut nihil? Hic officiis, praesentium porro dignissimos harum totam, maxime ratione sequi earum quaerat ab architecto a, sunt nam ipsa beatae? Pariatur perspiciatis quas iure deserunt inventore totam vel unde vitae quo, nemo consectetur accusamus quam odit tempora officiis incidunt cum expedita consequatur perferendis esse suscipit, soluta voluptas! Iure cupiditate eius molestias qui molestiae consectetur consequatur ipsum odio aliquam, similique nihil inventore sed excepturi reprehenderit blanditiis? ",
    "article-5.php"
);
$article6 = new Article(
    6,
    "La recette du mois",
    "images/slider-2.png",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, expedita.",
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, laboriosam illum? Sit dolor illo iusto, dolorum eos suscipit. Odio incidunt distinctio expedita reprehenderit est maiores aperiam molestias repudiandae deleniti cumque architecto rerum cum eveniet, in temporibus sint nobis officia magnam omnis nesciunt corporis. Rem adipisci a, sit deleniti accusamus nulla vero deserunt asperiores natus eveniet accusantium quos blanditiis alias commodi consequuntur. Reiciendis sint quae accusamus voluptas eveniet ut placeat ex neque ratione nostrum laudantium, ipsa possimus maxime nulla? Quis illum sint natus, maxime voluptate quidem incidunt. Nam, maiores dicta molestiae dolorum architecto nobis non maxime voluptatem voluptatum libero distinctio alias corporis temporibus quo facere qui tempore corrupti illum asperiores fugit earum possimus voluptas! Quasi minima quas quaerat obcaecati sunt maxime quis? Provident quae fugit dolorem amet voluptate doloremque totam labore vitae sed, dolore dolor. Asperiores, rerum! Ipsa autem ipsam sed similique? Debitis numquam odit magnam similique necessitatibus, explicabo ullam cum placeat. Nobis facere eum dignissimos nemo ducimus repudiandae ullam facilis reprehenderit excepturi, quo minima, nisi, cupiditate recusandae. Aliquam accusamus porro natus eligendi quasi obcaecati quos et rem at aperiam molestiae eum doloremque omnis eaque earum quod, neque totam velit deserunt expedita pariatur, ea, dolorum ut nihil? Hic officiis, praesentium porro dignissimos harum totam, maxime ratione sequi earum quaerat ab architecto a, sunt nam ipsa beatae? Pariatur perspiciatis quas iure deserunt inventore totam vel unde vitae quo, nemo consectetur accusamus quam odit tempora officiis incidunt cum expedita consequatur perferendis esse suscipit, soluta voluptas! Iure cupiditate eius molestias qui molestiae consectetur consequatur ipsum odio aliquam, similique nihil inventore sed excepturi reprehenderit blanditiis? ",
    "article-6.php"
);

$articles = [$article1, $article2, $article3, $article4, $article5, $article6];


// creation des pizzas

$taille = "20cm 30cm 40cm";

$smallMargarita = new Prix(5.10, "small");
$mediumMargarita = new Prix(7.80, "medium");
$bigMargarita = new Prix(12.60, "big");

$margarita = new Pizza("margarita", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, origan");
$margaritaPlus = new Pizza("margarita +", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, + un ingrédient au choix (épaule ou champignons ou chorizo ou merguez ou poitrine fumée),origan");
$quatreFromages = new Pizza("4 fromages +", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, gorgonzola, chèvre, reblochon, tomates fraîches olives, origan");
$tonito = new Pizza("tonito", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, sauce*, épaule, oignons, olives, origan");
$stromboli = new Pizza("stromboli", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, chorizo, oignons, poivrons, origan");
$campagnarde = new Pizza("campagnarde", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, champignons, poitrine fumée, olives, origan ");
$quatreSaisons = new Pizza("quatreSaisons", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, artichaut, épaule, champignons, olives, origan");
$piquante = new Pizza("piquante", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, chorizo, merguez, olives, origan ");
$royale = new Pizza("royale", "images/pizza-carte-menu.png", [$smallMargarita, $mediumMargarita, $bigMargarita], $taille, "Tomate, fromage, épaule, champignons, olives, origan");

$pizzas = [$margarita, $margaritaPlus, $quatreFromages, $tonito, $stromboli, $campagnarde, $quatreSaisons, $piquante, $royale];