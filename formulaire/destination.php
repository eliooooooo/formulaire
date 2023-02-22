<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bonjour</title>
</head>

<body>


    <div class="container">
        <a href="index.php">
            <div class="button close">
                <div class="trait"></div>
                <div class="trait trait2"></div>
            </div>
        </a>
        <div class="destination">
            <p class="p-centre"><?php if ((isset($_POST['nom']) && $_POST['nom'] != '') && (isset($_POST['prenom']) && $_POST['prenom'] != '')) {
                                    echo 'Bonjour <b>' . $_POST['nom'] . ' ' . $_POST['prenom'] . '</b> !<br>Content de te voir ici.';
                                } else {
                                    echo 'Vous n\'avez pas bien rempli le formulaire !';
                                }
                                ?></p>
        </div>

    </div>


</body>

</html>