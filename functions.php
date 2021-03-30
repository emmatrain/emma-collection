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
$wines = getWines($db);

/**
 * Iterates over the db array and displays using HTML and CSS
 *
 * @param array $wines the data
 * @return data in front end using echo
 */
function displayWines(array $wines) {
    foreach ($wines as $wine) {
        $wineName = $wine['wine-name'];
        $origin = $wine['origin'];
        $grape = $wine['grape'];
        $style = $wine['style'];
        $farming = $wine['farming'];
        $abv = $wine['abv'];
        $image = $wine['image-url'];
        ?>

        <div class="item">
            <div class="header-wrap"><h1><?php echo $wineName ?></h1></div>
            <img class="bottle" src="<?php echo $image?>" alt="wine bottle">
            <div class="stats-wrap">
                <h2>Origin </h2><p><?php echo $origin ?></p><br>
                <h2>Grape </h2><p><?php echo $grape ?></p><br>
                <h2>Style </h2><p><?php echo $style ?></p><br>
                <h2>Farming </h2><p><?php echo $farming ?></p><br>
                <h2>ABV </h2><p><?php echo $abv ?>%</p><br>
        </div>
        </div>
        <?php
    } } ?>




