<?php

require_once 'dbconnection.php';
require_once 'functions.php';

session_start();

//If you haven't been verified as logged in with your credentials
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    header('Location: index.php');
}

$wineName = $_POST['winename'];
$origin = $_POST['origin'];
$grape = $_POST['grape'];
$style = $_POST['style'];
$farming = $_POST['farming'];
$abv = $_POST['abv'];
$imageUrl = $_POST['imageurl'];

$db = getDb();
insertWine($db, $wineName, $origin, $grape, $style, $farming, $abv, $imageUrl);



?>