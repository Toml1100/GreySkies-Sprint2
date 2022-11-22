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
    include "../../db.php";

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
            <h1>For you:</h1>
            </div>
                <?php
            
            switch($set)
            {
                case 'DarkWalnut';
                    if ($package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="NoSeating" name="packageUpgrade" value="noSeating">';
                        echo '<label for="NoSeating"><img class="img-fluid"  src="images/darkWalnutscaled.jpeg" alt="No Seating Signs">Upgrade to No Seating $245</label>';
                        echo '</div>'; // end of col item
                    }
                    if ($package == "NoSeating" || $package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="FullSet" name="packageUpgrade" value="FullSet">';
                        echo '<label for="FullSet"><img class="img-fluid"  src="images/darkWalnutscaled.jpeg" alt="Full Set Signs">Upgrade to Full Set $299</label>';
                        echo '</div>'; // end of col item
                    }
                    break;
                case 'RusticWood';
                    if ($package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="NoSeating" name="packageUpgrade" value="noSeating">';
                        echo '<label for="NoSeating"><img class="img-fluid"  src="images/rusticwoodFullScaled.jpeg" alt="No Seating Signs">Upgrade to No Seating $245</label>';
                        echo '</div>'; // end of col item
                    }
                    if ($package == "NoSeating" || $package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="FullSet" name="packageUpgrade" value="FullSet">';
                        echo '<label for="FullSet"><img class="img-fluid"  src="images/rusticwoodFullScaled.jpeg" alt="Full Set Signs">Upgrade to Full Set $299</label>';
                        echo '</div>'; // end of col item
                    }
                    break;
                case 'VintageMirror';
                    if ($package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="PickSix" name="packageUpgrade" value="PickSix">';
                        echo '<label for="PickSix"><img class="img-fluid"  src="images/VintageMirrorScaled.jpeg" alt="Pick Six Signs">Upgrade to Pick Six $649</label>';
                        echo '</div>'; // end of col item
                    }
                    if ($package == "PickSix" || $package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="Gold" name="packageUpgrade" value="Gold">';
                        echo '<label for="Gold"><img class="img-fluid"  src="images/VintageMirrorScaled.jpeg" alt="Gold Sign Package">Upgrade to Gold Package $799</label>';
                        echo '</div>'; // end of col item
                    }
                    if ($package == "PickSix" || $package == "PickFour" || $package == "Gold") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="Platinum" name="packageUpgrade" value="Platinum">';
                        echo '<label for="Platinum"><img class="img-fluid"  src="images/VintageMirrorScaled.jpeg" alt="Platinum Sign Package">Upgrade to Platinum Package $849</label>';
                        echo '</div>'; // end of col item
                    }
                    break;
                case 'LayeredArch';
                    if ($package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="PickSix" name="packageUpgrade" value="PickSix">';
                        echo '<label for="PickSix"><img class="img-fluid"  src="images/layeredArchScaled.jpeg" alt="Pick Six Signs">Upgrade to Pick Six $749</label>';
                        echo '</div>'; // end of col item
                    }
                    if ($package == "NoSeating" || $package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="FullSet" name="packageUpgrade" value="FullSet">';
                        echo '<label for="FullSet"><img class="img-fluid"  src="images/layeredArchScaled.jpeg" alt="Full Set Signs">Upgrade to Full Set $849</label>';
                        echo '</div>'; // end of col item
                    }
                    break;
                case 'ModernRound';
                    if ($package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="PickSix" name="packageUpgrade" value="PickSix">';
                        echo '<label for="PickSix"><img class="img-fluid"  src="images/ModernRoundScaled.jpeg" alt="Pick Six Signs">Upgrade to Pick Six $699</label>';
                        echo '</div>'; // end of col item
                    }
                    if ($package == "PickSix" || $package == "PickFour") {
                        echo '<div class="col-12 col-md-4">';
                        echo '<input type="checkbox" id="FullSet" name="packageUpgrade" value="FullSet">';
                        echo '<label for="FullSet"><img class="img-fluid"  src="images/ModernRoundScaled.jpeg" alt="Full Set Signs">Upgrade to Full Set $799</label>';
                        echo '</div>'; // end of col item
                    }
                    break;
                default;
                    echo 'Oops, you should go <a href="sets.php">back and select a set</a>...';
                    break;
            }
            echo '</div>';
            echo '<div class="row checkboxDiv">';
            echo '<div class="col-12 text-center">';
            echo '<h1>Addons</h1>';
            echo '<p>Select anything you\'d like to add for '.$set.' on '.$weddingDate.' with the '.$package.' package.</p>';
            echo '<p>For an additional cost, we can even deliver to you.</p>';
            echo '</div>';
            if (checkExtra('HexagonArch', $weddingDate) < 1)
            {
                echo '<div class="col-12 col-md-4">';
                echo '<input type="checkbox" id="HexagonArch" name="addon[]" value="HexagonArch">';
                echo '<label for="HexagonArch"><img class="img-fluid" src="images/HexagonArch.jpg" alt="Hexagon Arch addon picture">Hexagon Arbor $350</label>';
                echo '</div>'; // end of col item
            }

            if (checkExtra('VintageCouch', $weddingDate) < 1) {
                echo '<div class="col-12 col-md-4">';
                echo '<input type="checkbox" id="VintageCouch" name="addon[]" value="VintageCouch">';
                echo '<label for="VintageCouch"><img class="img-fluid"  src="images/VintageCouch.jpg" alt="Vintage Couch Addon picture"> Vintage Couch $99</label>';
                echo '</div>'; // end of col item
            }

            if (checkExtra('WineJugs', $weddingDate) < 1) {
                echo '<div class="col-12 col-md-4">';
                echo '<input type="checkbox" id="WineJugs" name="addon[]" value="WineJugs">';
                echo '<label for="WineJugs"><img class="img-fluid"  src="images/WineJugs.jpg" alt="XL Wine Jugs addon picture">xl wine jugs $20<input type="number" name="WineJugsQty" min="0" max="3"></input></label>';
                echo '</div>'; // end of col item
            }
            
            if (checkExtra('AntiqueJugs', $weddingDate) < 1) {
                echo '<div class="col-12 col-md-4">';
                echo '<input type="checkbox" id="AntiqueJugs" name="addon[]" value="AntiqueJugs">';
                echo '<label for="AntiqueJugs"><img class="img-fluid"  src="images/AntiqueJugs.jpg" alt="Antique Gallon Jugs addon picture">Antique Gallon Jugs $4<input type="number" name="AntiqueJugsQty" min="0" max="12"></input></label>';
                echo '</div>'; // end of col item
            }

            if (checkExtra('ClearBall', $weddingDate) < 1) {
                echo '<div class="col-12 col-md-4">';
                echo '<input type="checkbox" id="ClearBall" name="addon[]" value="ClearBall">';
                echo '<label for="ClearBall"><img class="img-fluid"  src="images/ClearBall.jpg" alt="Clear Antique Ball Jars addon picture">Clear Antique Ball Jars (50) $30</label>';
                echo '</div>'; // end of col item
            }
            
            if (checkExtra('BlueBall', $weddingDate) < 1) {
                echo '<div class="col-12 col-md-4">';
                echo '<input type="checkbox" id="BlueBall" name="addon[]" value="BlueBall">';
                echo '<label for="BlueBall"><img class="img-fluid"  src="images/BlueBall.jpg" alt="Blue Antique Ball Jars">Blue Antique Ball Jars (25) $30</label>';
                echo '</div>'; // end of col item
            }

            ?>
            </div>
            <div class="row checkboxDiv">
                <?php

                //delivery
                echo '<div class="col-12 text-center">';
                if ($month != "May") {

                    echo '<input type="checkbox" id="Delivery" name="addon[]" value="Delivery">';
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

    <?php include "includes/ordercrumbs.php"; ?>
    <?php include "includes/footer.php"; ?>
</body>
</html>