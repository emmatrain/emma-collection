<?php

/**
* Retrieves a DB connection to the wine collection DB
* @return PDO wine collection DB
*/
function getDb():PDO
{
$db = new PDO('mysql:host=db; dbname=emma-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
return $db;
}

?>


