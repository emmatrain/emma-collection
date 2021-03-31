<?php

require_once 'functions.php';
require_once 'dbconnection.php';

$db = getDb();
$wines = getWines($db);
$winesToDisplay = displayWines($wines);

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="normalize.css" type="text/css" />
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <link rel="stylesheet" href="https://use.typekit.net/kln6efb.css">
</head>

<header>

<img class="header-img" src="images/header.png">

</header>

<body>

    <div class="wine-box">
        <?= $winesToDisplay; ?>
    </div>

    <form method="post" action="validate.php">
        <p>Wine Name:</p><br>
        <input type="text" name="wine-name" required><br>

        <p>Origin(Country, Region):</p><br>
        <input type="text" name="origin" required><br>

        <p>Grape:</p><br>
        <input type="text" name="grape" required><br>

        <p>Style:</p><br>
        <input type="radio" name="style" value="Sparkling" required>
        <label for="Style">Sparkling</label><br>
        <input type="radio" name="style" value="White" required>
        <label for="Style">White</label><br>
        <input type="radio" name="style" value="Rose" required>
        <label for="Style">Rose</label><br>
        <input type="radio" name="style" value="Red" required>
        <label for="Style">Red</label><br>

        <p>Farming:</p><br>
        <input type="radio" name="farming" value="Conventional" required>
        <label for="Farming">Conventional</label><br>
        <input type="radio" name="farming" value="Sustainable" required>
        <label for="Farming">Sustainable</label><br>
        <input type="radio" name="farming" value="Organic" required>
        <label for="Farming">Organic</label><br>
        <input type="radio" name="farming" value="Biodynamic" required>
        <label for="Farming">Biodynamic</label><br>
        <input type="radio" name="farming" value="Unknown" required>
        <label for="Farming">Unknown</label><br>

        <p>ABV:</p><br>
        <input type="number" step="0.01" name="abv" required><br>

        <p>Optional image URL:</p><br>
        <input type="url" name="abv"><br>

        <input type="submit" value="Add Wine" />

    </form>



</body>


</html>
