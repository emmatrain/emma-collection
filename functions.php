<?php

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

/**
 * Iterates over the db array and displays using HTML and CSS
 *
 * @param array $wines the data
 * @return string in front end using echo
 */
function displayWines(array $wines) {
    $result = "";
    foreach ($wines as $wine) {
        $result .= '<div class="item">';
        $result .= '<div class="header-wrap"><h1>' . $wine['wine-name'] . '</h1></div>';
        $result .= '<img class="bottle" src="' . $wine['image-url'] . '" alt="wine bottle">';
        $result .= '<div class="stats-wrap">';
        $result .= '<h2>Origin </h2><p>' . $wine['origin'] . '</p><br>';
        $result .= '<h2>Grape </h2><p>' . $wine['grape'] . '</p><br>';
        $result .= '<h2>Style </h2><p>' . $wine['style'] . '</p><br>';
        $result .= '<h2>Farming </h2><p>' . $wine['farming'] . '</p><br>';
        $result .= '<h2>ABV </h2><p>' . $wine['abv'] . '%</p><br>';
        $result .= '</div>';
        $result .= '</div>';
    }
    return $result;
}



