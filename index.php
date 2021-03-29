<?php

require_once 'dbconnection.php';
require_once 'functions.php';




$db = getDb();
$allWines = getWines($db);
echo '<pre>';
var_dump($allWines);
echo '</pre>';
?>

<!---->
<!--<!DOCTYPE html>-->
<!---->
<!--<html>-->
<!---->
<!--<head>-->
<!---->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--<header>-->
<!--    <h1>Wine Collection</h1>-->
<!--</header>-->
<!---->
<!--<body>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</body>-->
<!---->
<!---->
<!--</html>-->
