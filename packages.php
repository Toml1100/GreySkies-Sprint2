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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <div class="text-center">
        <?php 
            
            // set variables for set selected and wedding date selected
            $set = $_GET['set'];
            $weddingDate = $_GET['WeddingDate'];
            
            // check what month wedding date is
            $timestamp = strtotime($weddingDate);
            $month = date('F',$timestamp);
            
            
            //check if set is available
            if($month == "January" and $set == "LayeredArch"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
                echo '<p>Press <a href="https://gray.greenriverdev.com/GreySkies-Sprint2/sets.html">Here</a> to select a diffrent option</p>';

            }
            
            if($month == "February" and $set == "ModernRound"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
                echo '<p>Press <a href="https://gray.greenriverdev.com/GreySkies-Sprint2/sets.html">Here</a> to select a diffrent option</p>';
            }
            
            if($month == "March" and $set == "VintageMirror"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
                echo '<p>Press <a href="https://gray.greenriverdev.com/GreySkies-Sprint2/sets.html">Here</a> to select a diffrent option</p>';                
            }
            
            if($month == "April" and $set == "DarkWalnut"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
                echo '<p>Press <a href="https://gray.greenriverdev.com/GreySkies-Sprint2/sets.html">Here</a> to select a diffrent option</p>';                
            }
            
            if($month == "May" and $set == "RusticWood"){
                echo '<p>Sorry ' . $set . ' not available ' . ' in ' . $month . '</p>';
                echo '<p>Press <a href="https://gray.greenriverdev.com/GreySkies-Sprint2/sets.html">Here</a> to select a diffrent option</p>';
            }

  
        
        
            ?>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    
                    <?php echo'<h1>' .$set.'</h1>'; ?>
                </div>
            </div>
            <form name="SetForm" action="extras.php" method="GET">
                <div class="row">
                    <div class="text-center">
                        <h1>Pick your Package</h1>
                        <?php
                        if($set == "DarkWalnut"){
                            // Full Set
                            echo '<input type="radio" id="FullSet" name="DarkWalnut" value="FullSet">';
                            echo '<label for="FullSet">Full Set</label><br>'; 
                            // No Seating
                            echo '<input type="radio" id="NoSeating" name="DarkWalnut" value="NoSeating">';
                            echo '<label for="NoSeating">No Seating</label><br>'; 
                            //Pick 4
                            echo '<input type="radio" id="PickFour" name="DarkWalnut" value="PickFour">';
                            echo '<label for="PickFour">Pick Four</label><br>'; 

                        }
                        elseif($set == "RusticWood"){
                            // Full Set
                            echo '<input type="radio" id="FullSet" name="RusticWood" value="FullSet">';
                            echo '<label for="FullSet">Full Set</label><br>'; 
                            // No Seating
                            echo '<input type="radio" id="NoSeating" name="RusticWood" value="NoSeating">';
                            echo '<label for="NoSeating">No Seating</label><br>'; 
                            //Pick 4
                            echo '<input type="radio" id="PickFour" name="RusticWood" value="PickFour">';
                            echo '<label for="PickFour">Pick Four</label><br>'; 

                        }
                        elseif($set == "LayeredArch"){
                             // Full Set
                            echo '<input type="radio" id="FullSet" name="LayeredArch" value="FullSet">';
                            echo '<label for="FullSet">Full Set</label><br>'; 
                            // Pick 6
                            echo '<input type="radio" id="PickSix" name="LayeredArch" value="PickSix">';
                            echo '<label for="PickSix">Pick Six</label><br>'; 
                            // Pick 4
                            echo '<input type="radio" id="PickFour" name="LayeredArch" value="PickFour">';
                            echo '<label for="PickFour">Pick Four</label><br>';                            
                        }
                        elseif($set == "ModernRound"){
                             // Full Set
                            echo '<input type="radio" id="FullSet" name="ModernRound" value="FullSet">';
                            echo '<label for="FullSet">Full Set</label><br>'; 
                            // Pick 6
                            echo '<input type="radio" id="PickSix" name="ModernRound" value="PickSix">';
                            echo '<label for="PickSix">Pick Six</label><br>'; 
                            // Pick 4
                            echo '<input type="radio" id="PickFour" name="ModernRound" value="PickFour">';
                            echo '<label for="PickFour">Pick Four</label><br>';                            
                        }
                        elseif($set == "VintageMirror"){
                            // Platinum
                            echo '<input type="radio" id="Platinum" name="VintageMirror" value="Platinum">';
                            echo '<label for="Platinum">Platinum</label><br>';
                            // Gold
                            echo '<input type="radio" id="Gold" name="VintageMirror" value="Gold">';
                            echo '<label for="Gold">Gold</label><br>'; 
                            // Pick 6
                            echo '<input type="radio" id="PickSix" name="VintageMirror" value="PickSix">';
                            echo '<label for="PickSix">Pick Six</label><br>'; 
                            // Pick 4
                            echo '<input type="radio" id="PickFour" name="VintageMirror" value="PickFour">';
                            echo '<label for="PickFour">Pick Four</label><br>';                            
                        }
                        
                        ?>

    
                    </div>
    
    
                </div>
    
                <div class="row">

                    <div class="text-center">
                        <input type="submit" id="submit" name="submit" value="submit">                        
                    </div>


                </div>
            </form>
        </div>

    </body>
</html>
