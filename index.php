<?php

require_once 'dbconnection.php';

/**
 * Retrieves the wines from the database
 *
 * @param PDO $db a database connection
 * @return array all of the wines in the database
 */
function getWines(PDO $db): array
{
$query = $db->prepare("SELECT *
FROM `wines`;");
$query->execute();
return $query->fetchAll();
}

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
