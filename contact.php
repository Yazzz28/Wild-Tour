<?php

if ($_POST){
    $data = array_map('trim', $_POST);
    $errors = [];
    if ($data["nom"] === ""){
        $errors["nom"] = "Veuillez saisir votre nom !";
    }
    if ($data["prenom"] === ""){
        $errors["prenom"] = "Veuillez saisir votre prénom !";
    }
    if ($data["numero"] === ""){
        $errors["numero"] = "Veuillez saisir votre numéro de téléphone !";
    }
    if ($data["email"] === ""){
        $errors["email"] = "Veuillez saisir votre adresse email !";
    }
    if (filter_var($data["email"], FILTER_VALIDATE_EMAIL)){
        $errors["invalideEmail"] = "Votre adresse email n'est pas valide!";
      }
    if (!$errors) {
        echo "Votre message a été envoyé !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&family=Playfair+Display:ital,wght@1,700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>The Wild Tour</title>
</head>
<body>
    <section class="body-contact">
        <section class="headerC">
            <header>
                <div>
                    <nav class="navbar">
                        <img src="assets-daniel/logo-the-wild-tour-navbar.png" alt="logo" class="logo">
                        <ul class="list-general">
                            <li class="listeN"><a href="acceuil.html">Accueil</a></li>
                            <li class="listeN"><a href="contact.php">Contact</a></li>
                            <li class="listeN"><a href="#">Découverte</a><span>&#9660;</span>
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
                    <div id="icons"></div>
                    <h1>Contact</h1>
                </div>
            </header>
        </section>
            <main class="form" id="formulaire"> 
                <section class="box-form">
                    <form action="" method="post">
                    <input type="text" name="nom" placeholder="Nom"></input>
                        <?php
                        if (isset($errors["nom"])){
                            echo "<p class='p-contact'>" . $errors["nom"] . "</p>";
                        }
                        ?>
                    <input type="text" name="prenom" placeholder="Prénom"></input>
                        <?php
                        if (isset($errors["prenom"])){
                            echo "<p class='p-contact'>" . $errors["prenom"] . "</p>";
                        }
                        ?>
                    <input type="email" name="email" placeholder="Email"></input>
                        <?php
                        if (isset($errors["email"])){
                            echo "<p class='p-contact'>" . $errors["email"] . "</p>";
                        }
                        ?>
                    <input type="number" name="numero" placeholder="Téléphone"></input>
                        <?php
                        if (isset($errors["numero"])){
                            echo "<p class='p-contact'>" . $errors["numero"] . "</p>";
                        }
                        ?>
                    <textarea name="message" cols="20" rows="10" placeholder="Message"></textarea>

                    <button type="submit" value="submit" name="submit">Envoyer</button>
                    </form>
                </section>
            </main>
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
    </section>
    <script src="includes/menu-burger-mobile/menu-burger-mobile.js"></script>
</body>
</html>