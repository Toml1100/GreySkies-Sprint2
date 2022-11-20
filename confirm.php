<!-- Final Page that print out all the info from all the previous pages -->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>confirmation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>


    <div class='container-fluid'>
                         <?php
             echo '<div id="'.$_POST['Set'].'" class="text-center">';
                include "includes/header.html";
                echo '<h2>Confirmation</h2>';
                echo '</div>'; ?>
        <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <body>


             <h1>Thank you for your order!</h1>
            <?php $weddingDate = $_POST['WeddingDate'];
                $email = $_POST['email'];
                $set = $_POST['Set'];
                $package = $_POST['Package'];
                $price = $_POST['Price'];
                $vintageCouchStatus = $_POST['VintageCouch'];
                $hexagonArchStatus = $_POST['HexagonArch'];
                $wineJugsStatus = $_POST['WineJugs'];
                $antiqueJugsStatus = $_POST['AntiqueJugs'];
                $clearBallStatus = $_POST['ClearBall'];
                $blueBallStatus = $_POST['BlueBall'];
                $deliveryStatus = $_POST['Delivery'];
                $wineJugsQ = $_POST['WineJugsQty'];
                $antiqueJugsQ = $_POST['AntiqueJugsQty'];
                $addonString = '';
                ?>
          <?php echo '<p>Thank you for your reservation of the '. $set . ' set '.$package.' package for your wedding on ' . $weddingDate . ' the Walnut Ridge Reservation team will be contacing you shortly to confirm your reservation. Your reservation information listed here will also be emailed to you.</p>';?>
          
          <h3>Reservation Info:</h3>
            <?php echo '<p><b>Wedding Date:</b> ' . $weddingDate . '</p>'?>
            <?php echo '<p><b>Set: </b>' . $set . '</p>'?>
            <?php echo '<p><b>Package: </b>' . $package . '</p>'?>
            
            <!--["HexagonArch"]=> string(11) "HexagonArch" ["VintageCouch"]=> string(12) "VintageCouch" ["WineJugs"]=> string(8) "WineJugs" ["AntiqueJugs"]=> string(11) "AntiqueJugs" ["ClearBall"]=> string(9) "ClearBall" ["BlueBall"]=> string(8) "BlueBall" ["Delivery"]=> string(8) "Delivery"-->
            
            <?php 
        
                
                if($vintageCouchStatus != null){
                    $addonString = $addonString . "Vintage Couch" . ", ";
                }
                
                if($hexagonArchStatus != null){
                    $addonString = $addonString . "Hexagon Arch" . ", ";
                }
                
                if($wineJugsStatus != null){
                    $addonString = $addonString . "XL Wine Jugs" . '(x'.$wineJugsQ.')'. ", ";
                }
                
                if($antiqueJugsStatus != null){
                    $addonString = $addonString . "Antique Gallon Jugs" . '(x'.$antiqueJugsQ.')'.", ";
                }
                
                if($clearBallStatus != null){
                    $addonString = $addonString . "Clear Antique Ball Jars" . ", ";
                }
                
                if($blueBallStatus != null){
                    $addonString = $addonString . "Blue Antique Ball Jars" . ", ";
                }
                
                if($deliveryStatus != null){
                    $addonString = $addonString . "Delivery" ;
                }
            
                echo '<p><b>Add-ons: </b>'. $addonString .' </p>'
                
                ?>
            <?php echo '<p><b>Total Price:</b> $' . $price . ' </p>'?>
        
                <?php include "includes/ordercrumbs.php"; ?>
        </body>
        </div>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>
</html>

    <!--SEND EMAIL-->
    <?php
    //Recipient
    $to = $email;
    
    //Subject
    $subject = 'Order Confirmation';
    
    //Message
    $message = '<html><h1>Walnut Ridge Reservation Confirmation </h1>'. '
        <p><b>WeddingDate:</b> '. $weddingDate . '</p>
        <p><b>Set: </b>'. $set . '</p>
        <p><b>Package:</b> '. $package . '</p>
        <p><b>Add-ons:</b> '. $addonString . '</p>
        <p><b>Price:</b> '. $price . '</p>
        </html>';
    
    //headers 
    $headers = "From: Sender <tom.loudon.5@gmail.com>\r\n";
    $headers .= "Reply-To: <tom.loudon.5@gmail.com>\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    //Send Email
    mail($to, $subject, $message, $headers);
    ?>