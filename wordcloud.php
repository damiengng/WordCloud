<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire WordCloud</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>WordCloud</h1>
    <form action="traitement.php" method="post" enctype="multipart/form-data">
        <label for="mots_cles">Entrez vos mots-clés :</label><br>
        <input type="text" id="mots_cles" name="mots_cles"><br>
        <input type="checkbox" id="supprimer_fichier" name="supprimer_fichier">
        <label for="supprimer_fichier">Ne pas inclure de fichier</label><br>
        <label for="fichier">Importer un fichier texte :</label><br>
        <input type="file" id="fichier" name="fichier"><br>
        <input type="submit" value="Générer Nuage de Mots-Clés">
    </form>
</div>

</body>
</html>
