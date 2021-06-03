<?php

if (isset($_POST['email']) && $email = $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "laura.taormina@gmail.com";
        $body = "";

        $body .= "De :" . $firstname . $name . "\r\n";
        $body .= "Email : " . $email . "\r\n";
        $body .= "Message : " . $message . "\r\n";

        mail($to, $message, $body);

        $message_sent = true;
        $msg = "Votre message a bien été envoyé !";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Aidtudes - Des questions ?</title>
    <link rel="stylesheet" href=css/couleur_et_typographie.css>
    <link rel="stylesheet" href="css/mise_en_page.css">
    <link rel="stylesheet" href="css/style_graphique.css">
    <link rel="stylesheet" href="css/lib/normalize.css">
    <script src="https://kit.fontawesome.com/8444637501.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <img src="img/logo-txt.svg" alt="Logo">
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="index.html#le-projet">Le projet</a></li>
            <li><a href="index.html#equipe">Notre équipe </a></li>
            <li><a href="formulaire.php">Nous contacter</a></li>
        </ul>
    </nav>
</header>

<main>

    <div class="section-1">
        <p>Une question ? </p>
        <p>Une suggestion ?</p>
    </div>

    <div class="section-2">

        <form action="" method="post">

            <div>
                <label for="name"></label>
                <input type="text" id="name" placeholder="ton nom" name="name">
            </div>

            <div>
                <label for="first-name"></label>
                <label>
                    <input type="text" id="firstname" placeholder="ton prénom" name="firstname" style="width:100%">
                </label>
            </div>

            <div>
                <label for="mail">
                    <input type="email" id="mail" placeholder="ton e-mail" name="email">
                </label>
            </div>

            <div>
                <label for="msg"></label>
                <textarea id="msg" placeholder="tes remarques" name="message"></textarea>
            </div>

            <div class="button">
                <input type="submit" value="Envoyer" name="contactform">
            </div>
        </form>

        <?php
        if (isset($msg)) {
            echo "<h2>" . $msg . "</h2>";
        }
        ?>

    </div>

</main>

<footer>
    <div class="footer-txt">
        <p><a href="#">Mentions légales</a> - aidTudes</p>
        <p>Projet réalisé dans un cadre pédagogique au <a href="https://mmimontbeliard.com/">département MMI de l’IUT de
                Montbéliard</a></p>
    </div>

    <div class="reseaux">
        <ul>
            <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.Instagram.com"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://Facebook.com"><i class="fab fa-facebook-f"></i></a></li>
        </ul>
    </div>
</footer>

</body>
</html>