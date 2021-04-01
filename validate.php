<?php
header('Location: added.php');

require_once 'dbconnection.php';
require_once 'functions.php';

$wineName = $_POST['winename'];
$origin = $_POST['origin'];
$grape = $_POST['grape'];
$style = $_POST['style'];
$farming = $_POST['farming'];
$abv = $_POST['abv'];
$imageUrl = $_POST['imageurl'];

//
//function validate(){
//    return isset ($_POST['winename'])
//        && ($_POST['origin'])
//        && ($_POST['grape'])
//        && ($_POST['style'])
//        && ($_POST['farming'])
//        && ($_POST['abv'])
//        && ($_POST['imageurl']);
//}
//
//$db = getDb();
//
//if (validate()) {
//insertWine($db, $wineName, $origin, $grape, $style, $farming, $abv, $imageUrl);
//} else {
//    echo "error error wines not set";
//}
//
//var_dump($wineName);

?>