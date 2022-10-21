<!-- 
Only shows the available extras using PHP**
If its available, allows user to visually pick between the available packages
Delivery is also an option at the bottom, looks visually different
Submits to reserve.php
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>extras</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

<body>
<?php
$set = $_GET['Set'];
$weddingDate = $_GET['WeddingDate'];
$package = $_GET['package'];

//from previous page to have a month to test displaying it from
$timestamp = strtotime($weddingDate);
$month = date('F',$timestamp);

echo '<div id="'.$set.'" class="text-center">';
include "includes/header.html";
echo '<h2>Extras</h2>';
echo '</div>';
?>

<form name="ExtrasForm" action="reserve.php" method="GET">
<div class="container-fluid">
    <div class="row checkboxDiv">
        <div class="col-12 text-center">
            <?php
            echo '<h1>For you:</h1>';
            echo '<p>Select anything you\'d like to add for '.$set.' on '.$weddingDate.' with the '.$package.' package.</p>';
            
            if ($month != "May") {
                echo '<p>For an additional cost, we can even deliver to you.</p>';
            }
            
            ?>
        </div>
                <?php
                /* Hexagon Arch not available in January
                 * Couch not available in February
                 * Jugs not available in March
                 * Jars not available in April
                 * Delivery not available in May */
                if ($month != "January")
                {
                    echo '<div class="col-12 col-md-4">';
                    echo '<input type="checkbox" id="HexagonArch" name="addon" value="HexagonArch">';
                    echo '<label for="HexagonArch"><img class="img-fluid" src="images/HexagonArch.jpg" alt="Hexagon Arch addon picture">Hexagon Arch</label>';
                    echo '</div>'; // end of col item
                }

                if ($month != "February") {
                    echo '<div class="col-12 col-md-4">';
                    echo '<input type="checkbox" id="VintageCouch" name="addon" value="VintageCouch">';
                    echo '<label for="VintageCouch"><img class="img-fluid"  src="images/VintageCouch.jpg" alt="Vintage Couch Addon picture">Vintage Couch</label>';
                    echo '</div>'; // end of col item
                }

                if ($month != "March") {
                    echo '<div class="col-12 col-md-4">';
                    echo '<input type="checkbox" id="WineJugs" name="addon" value="WineJugs">';
                    echo '<label for="WineJugs"><img class="img-fluid"  src="images/WineJugs.jpg" alt="XL Wine Jugs addon picture">xl wine jugs</label>';
                    echo '</div>'; // end of col item
                    echo '<div class="col-12 col-md-4">';
                    echo '<input type="checkbox" id="AntiqueJugs" name="addon" value="AntiqueJugs">';
                    echo '<label for="AntiqueJugs"><img class="img-fluid"  src="images/AntiqueJugs.jpg" alt="Antique Gallon Jugs addon picture">Antique Gallon Jugs</label>';
                    echo '</div>'; // end of col item
                }

                if ($month != "April") {
                    echo '<div class="col-12 col-md-4">';
                    echo '<input type="checkbox" id="ClearBall" name="addon" value="ClearBall">';
                    echo '<label for="ClearBall"><img class="img-fluid"  src="images/ClearBall.jpg" alt="Clear Antique Ball Jars addon picture">Clear Antique Ball Jars</label>';
                    echo '</div>'; // end of col item

                    echo '<div class="col-12 col-md-4">';
                    echo '<input type="checkbox" id="BlueBall" name="addon" value="BlueBall">';
                    echo '<label for="BlueBall"><img class="img-fluid"  src="images/BlueBall.jpg" alt="Blue Antique Ball Jars">Blue Antique Ball Jars</label>';
                    echo '</div>'; // end of col item
                }

                ?>
            </div>
            <div class="row checkboxDiv">
                <?php

                //delivery
                echo '<div class="col-12 text-center">';
                if ($month != "May") {

                    echo '<input type="checkbox" id="Delivery" name="Delivery" value="yes">';
                    echo '<label for="Delivery"><br><img class="img-fluid"  src="images/delivery.jpg" alt="Delivery Picture Option"><br>Delivery?</label>';

                } else {

                    echo '<br><img class="img-fluid"  src="images/delivery.jpg" alt="Delivery Picture Option"><br>Sorry, delivery is unavailable for this reservation :(</label>';
                }
                //hidden values to send before submitting this to reserve.php!
                echo '<input type="hidden" name="WeddingDate" value='.$weddingDate. '>';
                echo '<input type="hidden" name="Set" value='.$set.'>';
                echo '<input type="hidden" name="Package" value='.$package.'>';
                ?><br>
                <input type="submit" id="checkAvailability" name="submit" value="submit order">
                </div>
            </form>
            </div>
        </div>

    <?php include "includes/footer.html"; ?>
</body>
</html>