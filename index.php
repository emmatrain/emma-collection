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




</body>


</html>
