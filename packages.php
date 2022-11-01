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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>packages</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
        <?php 
            // set variables for set selected and wedding date selected
            $set = $_GET['set'];
            $weddingDate = $_GET['WeddingDate'];
            echo '<div id="'.$set.'" class="text-center">';
            include "includes/header.html";
            echo '<h2>Pick Your '. $set . ' Package</h2>';
            echo '</div>';
        ?>
        <div class="text-center">
        <?php 
            

            
            // check what month wedding date is
            $timestamp = strtotime($weddingDate);
            $month = date('F',$timestamp);
            
            
            //check if set is available
            if($month == "January" and $set == "LayeredArch"){
                echo '<h1>Sorry ' . $set . ' not available ' . ' in ' . $month . '</h1>';
                echo '<h1>Press <a class="redirect" href="https://gray.greenriverdev.com/Sprint2">Here</a> to select a diffrent option</h1>';

            }
            
            elseif($month == "February" and $set == "ModernRound"){
                echo '<h1>Sorry ' . $set . ' not available ' . ' in ' . $month . '</h1>';
                echo '<h1>Press <a class="redirect" href="https://gray.greenriverdev.com/Sprint2">Here</a> to select a diffrent option</h1>';
            }
            
            elseif($month == "March" and $set == "VintageMirror"){
                echo '<h1>Sorry ' . $set . ' not available ' . ' in ' . $month . '</h1>';
                echo '<h1>Press <a class="redirect" href="https://gray.greenriverdev.com/Sprint2">Here</a> to select a diffrent option</h1>';                
            }
            
            elseif($month == "April" and $set == "DarkWalnut"){
                echo '<h1>Sorry ' . $set . ' not available ' . ' in ' . $month . '</h1>';
                echo '<h1>Press <a class="redirect" href="https://gray.greenriverdev.com/Sprint2">Here</a> to select a diffrent option</h1>';                
            }
            
            elseif($month == "May" and $set == "RusticWood"){
                echo '<h1>Sorry ' . $set . ' not available ' . ' in ' . $month . '</h1>';
                echo '<h1>Press <a class="redirect" href="https://gray.greenriverdev.com/Sprint2">Here</a> to select a diffrent option</h1>';
            }
            
            else{
                include "includes/validPackages.php";
            }

            ?>
        </div>

    <?php include "includes/ordercrumbs.php"; ?>
    <?php include "includes/footer.php"; ?>
</body>
</html>

