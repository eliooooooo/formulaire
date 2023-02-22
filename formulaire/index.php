<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- icon -->
    <link rel="icon" href="images/stone_32x32.png" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Formulaire de connexion | BURKLE Eliott</title>
</head>

<body>
    <div class="main">
        <div class="header"></div>
        <div class="container">
            <div class="header-fenetre">
                <a href="index.php">
                    <div class="button close">
                        <div class="trait"></div>
                        <div class="trait trait2"></div>
                    </div>
                </a>
                <div class="button deplacer"></div>
                <div class="button large">
                    <div class="rectangle">
                        <div class="rectangle rectangle2"></div>
                    </div>
                </div>
                <div class="title">
                    <p>Connexion / Inscription</p>
                </div>
            </div>
            <div class="contenu">
                <div class="contenu-box left">
                    <div class="logo-connexion"></div>
                    <div class="lien-connexion">
                        <p>Déjà membre ? <a href="#connexion">Connectez vous !</a></p>
                    </div>
                </div>
                <form class="contenu-box right" action="destination.php" method="post">
                    <div class="infos nom-connexion">Nom :</div>
                    <input type="text" id="nom" name="nom" requiredminlength="2" maxlength="18" size="10" title="Ne doit contenir que des lettres, avec un maximum de 18 caractères" value="<?php if (isset($_COOKIE['nom'])) {
                                                                                                                                                                                                echo $_COOKIE['nom'];
                                                                                                                                                                                            }  ?>" />
                    <div class="infos prenom-connexion">Prenom :</div>
                    <input type="text" id="prenom" name="prenom" requiredminlength="2" maxlength="18" size="10" title="Ne doit contenir que des lettres, avec un maximum de 18 caractères" value="<?php if (isset($_COOKIE['prenom'])) {
                                                                                                                                                                                                        echo $_COOKIE['prenom'];
                                                                                                                                                                                                    }  ?>">
                    <div class="infos prenom-connexion">Mot de passe :</div>
                    <input type="password" id="mdp" name="mdp" requiredminlength="8" maxlength="18" size="10" title="Doit contenir un mot de passe assez sécurisé">
                    <div class="boutton-connexion"> <input type="submit" value="Valider"> </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    $fichier = fopen("log.txt", "a");
    fputs($fichier, " \n ");
    fputs($fichier, date('Y') . " / " . date('m') . " / " . date('d') . " - " . date('h') . " : " . date('m'));
    fclose($fichier);
    ?>
</body>

</html>