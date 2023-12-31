<?php

include_once('../modele/TypeLogements.php');


?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulaire</title>
</head>

<body>

    <style>
        body {
            background-color: #f2f2f2;
            color: #333333;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333333;
        }

        h2 {
            color: #333333;
            margin-bottom: 10px;
        }

        h3 {
            color: #333333;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 600px;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333333;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555555;
        }
    </style>


    <h1>Ajouter un logement<h1>

            <h2>Description du logement</h2>

            <form action="../controlleurs/CreateAnnouncement.php" method="POST">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required placeholder="Entrez le nom"><br><br>

                <label for="description">Description :</label>
                <textarea id="description" name="description" rows="4" cols="50" required
                    placeholder="Décrivez l'hébergement"></textarea><br><br>

                <label for="latitude">Latitude :</label>
                <input type="text" id="latitude" name="latitude" required placeholder="Ex: 48.8566"><br><br>

                <label for="longitude">Longitude :</label>
                <input type="text" id="longitude" name="longitude" required placeholder="Ex: 2.3522"><br><br>

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required placeholder="Entrez l'adresse"><br><br>

                <label for="voyageurs">Nombre de voyageurs :</label>
                <input type="number" id="voyageurs" name="voyageurs" required
                    placeholder="Entrez le nombre de voyageurs"><br><br>

                <label for="prix">Prix :</label>
                <input type="number" id="prix" name="prix" required placeholder="Entrez le prix"><br><br>

                <label for="typeLogement">Type de logement :</label>
                <select name="typeLogement" id="typeLogement">
                    <?php
                    print(typeLogement::getTypeLogements());
                    ?>
                </select><br><br>

                <label for="chambres">Nombre de chambres :</label>
                <input type="number" id="chambres" name="chambres" required
                    placeholder="Entrez le nombre de chambres"><br><br>

                <label for="cuisine">Cuisine :</label>
                <input type="text" id="cuisine" name="cuisine" required
                    placeholder="Indiquez s'il y a une cuisine"><br><br>

                <label for="sallesDeBain">Nombre de salles de bain :</label>
                <input type="number" id="sallesDeBain" name="sallesDeBain" required
                    placeholder="Entrez le nombre de salles de bain"><br><br>

                <!--ajout des services-->

                <h2>Ajouter des services au logement</h2>

                <h3>Services disponibles :</h3>

                <?php

                typeLogement::GetAllService();

                ?><br>


                <h2>Ajouter des images</h2>

                <!--formulaire de récupération des url images-->
                <label for="directory">Image principale :</label>
                <input type="text" id="directory" name="directory" placeholder="Nom_Du_Dossier/url.jpg" required>
                <br>


                <input type="submit" value="Envoyer"><br><br>
            </form>
</body>

</html>