<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets-julien/style-julien.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&family=Playfair+Display:ital,wght@1,700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>The Wild tour</title>
</head>

<body>
<header>
        <div class="container">
          <nav class="navbar" id="nav">
            <img
              src="assets-daniel/logo-the-wild-tour-navbar.png"
              alt="logo"
              class="logo"
            />
            <ul class="list-general">
              <li class="listeN"><a href="acceuil.html">Accueil</a></li>
              <li class="listeN"><a href="contact.php">Contact</a></li>
              <li class="listeN">
                <a href="decouvertes.php">Découverte</a><span>&#9660;</span>
                <ul class="sousMenu">
                  <li class="sousListe">
                    <a href="fiche-yacine.html">Gastronomie</a>
                  </li>
                  <li class="sousListe">
                    <a href="fiche-daniel.html">Sport</a>
                  </li>
                  <li class="sousListe"><a href="fiche-julien.php">Art</a></li>
                  <li class="sousListe">
                    <a href="fiche-stephV.html">Ecologie</a>
                  </li>
                  <li class="sousListe">
                    <a href="fiche_stephM.html">Nature</a>
                  </li>
                </ul>
              </li>
            </ul>
            <div id="icons"></div>
          </nav>
        </div>
      </header>

    <main>
        <!--Image principale top et titre -->
        <section>
            <h1 class="title-top">Découvertes</h1>
            <div>
                <img class="img-top" src="assets-julien/casa-del-arbol-ibiza-veranda-salon-exterieur.jpeg">
            </div>
        </section>
        <section class="section-center">
            <div class="description-center">
                <h2>Tous les articles</h2>
                <!--Partie paragraphe a centrer selon la disposition que l'on souhaite-->
                <p class="texte">
                    Construit entre 1941 et 1944 durant la Seconde Guerre mondiale, la Base sous-marine de bordeaux
                    abritait historiquement des sous-marins allemands pendant la guerre. Ce gigantesque monument de 42
                    000 m2 mesurent près de 20 mètres de haut. Il pouvait accueillir jusqu'à quinze sous-marins répartis
                    dans onze bassins couverts.
                </p>
            </div>
        </section>

        <!-- Catégories -->

        <section class="centrer">
            <h3 class="card__h3">Catégories</h3>
            <div class="container">

                <div class="card">
                    <div class="card__header">
                        <img src="assets-categories/categorie-gastronomie.jpg" alt="card__image" class="card__image" width="600">
                    </div>
                    <div class="card__body">
                        <h4>Gastronomie</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo
                            doloribus. Doloremque, nihil! At ea atque quidem!</p>
                        <a class="card__button" href="">Lire plus...</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <img src="assets-categories/categorie-sport.jpg" alt="card__image" class="card__image" width="600">
                    </div>
                    <div class="card__body">
                        <h4>Sport</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo
                            doloribus. Doloremque, nihil! At ea atque quidem!</p>
                        <a class="card__button" href="">Lire plus...</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <img src="assets-categories/categorie-art.jpg" alt="card__image" class="card__image" width="600">
                    </div>
                    <div class="card__body">
                        <h4>Art</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo
                            doloribus. Doloremque, nihil! At ea atque quidem!</p>
                        <a class="card__button" href="">Lire plus...</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <img src="assets-categories/categorie-ecologie.jpg" alt="card__image" class="card__image" width="600">
                    </div>
                    <div class="card__body">
                        <h4>Écologie</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo
                            doloribus. Doloremque, nihil! At ea atque quidem!</p>
                        <a class="card__button" href="">Lire plus...</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <img src="assets-categories/categorie-nature.jpg" alt="card__image" class="card__image" width="600">
                    </div>
                    <div class="card__body">
                        <h4>Nature</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo
                            doloribus. Doloremque, nihil! At ea atque quidem!</p>
                        <a class="card__button" href="">Lire plus...</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Articles récents PHP 

        <?php include 'assets-julien/articles.php'; ?>

        <section class="articles-recents">
            <h3 class="article-h3">Les articles récents</h3>
            <hr>
            <div class="article-col2">
                <?php foreach ($article as $contenu) : ?>
                    <?php foreach ($contenu as $topic) : ?>
                        <div class="article-col2-1">
                            <img class="article-img" src="assets-julien/<?= $topic['image']; ?>" alt="<?= $topic['titre']; ?>">
                        </div>
                        <div class="article-col2-2">
                            <h4>
                                <?= $topic['titre']; ?>
                            </h4>
                            <p>
                                <?= $topic['description']; ?>
                            </p>
                            <button class="button-lire-plus"><a href="<?= $topic['url']; ?>">Lire plus...</a></button>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </section>-->

        <!-- Articles récents HTML -->

        <section class="articles-recents">
            <h3 class="article-h3">Les articles récents</h3>
            <hr>
            <div class="article-col2">
                <div class="article-col2-1">
                    <img class="article-img" src="assets-daniel/pexels-cottonbro-studio-4828253.jpg">
                </div>
                <div class="article-col2-2">
                    <h4>Le début de la pêche dans l’Aube, Troyes</h4>
                    <p>This defines the ability for a flex item to grow if necessary. It
                        accepts a unitless value that serves as a proportion. It dictates what amount of the
                        available space inside the flex container the item should take up.</p>
                    <button class="button-lire-plus">Lire plus...</button>
                </div>
            </div>

            <div class="article-col2">
                <div class="article-col2-1">
                    <img class="article-img" src="assets-julien/IMG_4122.jpg">
                </div>
                <div class="article-col2-2">
                    <h4>Base sous-marine, Bordeaux</h4>
                    <p>This defines the ability for a flex item to grow if necessary. It
                        accepts a unitless value that serves as a proportion. It dictates what amount of the
                        available space inside the flex container the item should take up.</p>
                    <button class="button-lire-plus">Lire plus...</button>
                </div>
            </div>

            <div class="article-col2">
                <div class="article-col2-1">
                    <img class="article-img" src="assets-stephV/pexels-sarah-chai-7263016.jpg">
                </div>
                <div class="article-col2-2">
                    <h4>Écoresponsabilité en entreprise, Libourne</h4>
                    <p>This defines the ability for a flex item to grow if necessary. It
                        accepts a unitless value that serves as a proportion. It dictates what amount of the
                        available space inside the flex container the item should take up.</p>
                    <button class="button-lire-plus">Lire plus...</button>
                </div>
            </div>

            <h5 class="article-h5 centrer"><a href="">Charger plus...</a></h5>

        </section>

    </main>

    <!-- Footer -->

    <footer>
            <div class="footer-central">
                <div class="logo">
                    <img src="/assets-daniel/logo-the-wild-tour-navbar.png" alt="" width="150">
                </div>
                <div class="menssions">
                    <p>Mentions légales <br>
                    Plolitique de confidentialité <br>
                    Conditions d'utilisation</p>
                </div>
                <div class="blog">
                    <p>A propos <br>
                    Blog</p>
                </div>
            </div>
            <div class="bas-footer">
                <p>Boullevard des regions, 96000 WildLand</p>
            </div>
        </footer>

    <!-- Fin du footer -->
    <script src="includes/menu-burger-mobile/menu-burger-mobile.js"></script>
</body>

</html>