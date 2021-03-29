<?php

//Require DB connection

require_once 'dbconnection.php';

/**
* Retrieves the wines from the database
*
* @param PDO $db a database connection
* @return array all of the wines in the database
*/

function getPlayers(PDO $db): array
{
$query = $db->prepare("SELECT `id`, `wine-name`,
`origin`, `grape`, `style`,
`farming`, `style`,`farming`,`abv` `image-url`
FROM `wines`;");
$query->execute();
return $query->fetchAll();
}


?>

<!DOCTYPE html>

<html>

<head>

</head>

<body>

<header>
    <h1>Wine Collection</h1>
</header>

<body>


</body>


</html>
