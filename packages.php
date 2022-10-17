<!-- 
Checks if the date/package is available using PHP** - if not available, it presents a nice message saying sorry, links back to "pick your set"
If its available, allows user to visually pick between the available packages
Submits to extras.php 

Layered Arch and Hexagon Arch not available in January
Modern Round and Couch not available in February
Vintage Mirror and Jugs not available in March
Dark Walnut and Jars not available in April
Rustic Wood and Delivery not available in May
-->

<html>
    <head>
    <title>PHP Test</title>
    </head>

    <body>

        <?php 
            
            // set variables for set selected and wedding date selected
            $set = $_GET['set'];
            $weddingDate = $_GET['WeddingDate'];
            
            // check what month wedding date is
            $timestamp = strtotime($weddingDate);
            $month = date('F',$timestamp);
            
            
            echo '<p>You Selected:' . $set . '</p>';
            echo '<p>You Selected:' . $weddingDate . '</p>';
            
            //check if set is available
            if($month == "January" and $set == "LayeredArch"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
            }
            
            if($month == "February" and $set == "ModernRound"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
            }
            
            if($month == "March" and $set == "VintageMirror"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
            }
            
            if($month == "April" and $set == "DarkWalnut"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
            }
            
            if($month == "May" and $set == "RusticWood"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
            }

        ?>

    </body>
</html>
