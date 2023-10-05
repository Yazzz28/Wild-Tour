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
    <header class="centrer">
        <nav class="navbar">
            <img src="logo-the-wild-tour-navbar.png" alt="logo" class="logo">
            <ul class="list-general">
                <li class="listeN"><a href="accueil.html">Accueil</a></li>
                <li class="listeN"><a href="contact.php">Contact</a></li>
                <li class="listeN"><a href="#">Découvertes</a><span>&#9660;</span>
                    <ul class="sousMenu">
                        <li class="sousListe"><a href="fiche-yacine.html">Gastronomie</a></li>
                        <li class="sousListe"><a href="fiche-daniel.html">Sport</a></li>
                        <li class="sousListe"><a href="fiche-julien.php">Art</a></li>
                        <li class="sousListe"><a href="fiche-stephV.html">Ecologie</a></li>
                        <li class="sousListe"><a href="fiche_stephM.html">Nature</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
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

    <footer class="footer-col3">
        <section>
            <div class="footer-col3-1">
                <img src="logo-the-wild-tour-navbar.png">
            </div>
            <div class="footer-col3-2">
                <h3>Pages principales</h3>
                <ul>
                    <li><a href="accueil.html">Accueil</a></li>
                    <li><a href="decouvertes.html">Découvertes</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col3-3">
                <h3>Mentions légales</h3>
                <ul>
                    <li><a href="mentions-legales.html">Politique de confidentialité</a></li>
                    <li><a href="cgv.html">CGV / CGU</a></li>
                </ul>
            </div>
        </section>
        <!--Partie basse avec anotations de politiques internet et link cliquable Rate-->
        <section>
            <li><a href="/rate.html">Donnez votre avis</a></li>
        </section>
        <h6>Mentions légales</h6>
    </footer>

    <!-- Fin du footer -->
</body>

</html>