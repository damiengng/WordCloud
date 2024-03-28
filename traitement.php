<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordCloud</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $motsCles = $_POST["mots_cles"];

        $supprimerFichier = isset($_POST["supprimer_fichier"]);

        if (!$supprimerFichier) {

            $fichierTmp = $_FILES["fichier"]["tmp_name"];
            $fichierNom = $_FILES["fichier"]["name"];

            if (!empty($fichierTmp) && is_uploaded_file($fichierTmp)) {

                $contenuFichier = file_get_contents($fichierTmp);
                $motsClesFichier = explode(" ", $contenuFichier);
                $motsCles .= " " . implode(" ", $motsClesFichier);
            }
        }

        $mots = explode(" ", $motsCles);

        $couleurs = [];
        foreach ($mots as $mot) {
            $couleur = substr(md5($mot), 0, 6);
            $couleurs[$mot] = '#' . $couleur;
        }

        foreach ($couleurs as $mot => $couleur) {
            echo '<span style="color: ' . $couleur . ';">' . $mot . '</span> ';
        }
    }
    ?>
</div>

</body>
</html>
