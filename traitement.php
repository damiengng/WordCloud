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

    echo "Mots-clés : " . $motsCles;
}
?>
