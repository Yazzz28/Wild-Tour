<!DOCTYPE html>

<!-- Articles récents -->

<body>
    <main>
        <?php include('articles.php'); ?>

        <?php foreach ($articles as $titre => $article) : ?>

            <section>
                <h3><?= $title ?></h3>
                <div class="articles-recents">
                    <?php foreach ($article as $contenu) : ?>
                        <div>
                            <img src="assets/images/<?= $contenu['image'] ?>" alt="<?= $contenu['title'] ?>">
                            <figcaption>
                                <h2><?= $contenu['title'] ?></h2>
                                <p><?= $contenu['description'] ?></p>
                                <div><button class="lire-plus">Lire plus...</button></div>
                            </figcaption>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

        <?php endforeach; ?>

    </main>
</body>