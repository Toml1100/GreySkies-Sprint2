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
            <?php 
                require '../../db.php';

                $weddingDate = $_POST['WeddingDate'];
                $name = mysqli_real_escape_string($cnxn, $_POST['name']); // can be used to accept crappy data characters
                $phone = mysqli_real_escape_string($cnxn, $_POST['phone']);
                $email = mysqli_real_escape_string($cnxn, $_POST['email']);
                $secondName = mysqli_real_escape_string($cnxn, $_POST['name2']);
                $secondPhone = mysqli_real_escape_string($cnxn, $_POST['phone2']);
                $secondEmail = mysqli_real_escape_string($cnxn, $_POST['email2']);
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
                    $VintageCouch = 1;
                }
                else {
                    $VintageCouch = 0;
                }
                
                if($hexagonArchStatus != null){
                    $addonString = $addonString . "Hexagon Arch" . ", ";
                    $HexagonArch = 1;
                }
                else {
                    $HexagonArch = 0;
                }
                
                if($wineJugsStatus != null){
                    $addonString = $addonString . "XL Wine Jugs" . '(x'.$wineJugsQ.')'. ", ";
                    $wineJugsQ = intval($wineJugsQ);
                }
                else {
                    $wineJugsQ = 0;
                }
                
                if($antiqueJugsStatus != null){
                    $addonString = $addonString . "Antique Gallon Jugs" . '(x'.$antiqueJugsQ.')'.", ";
                    $antiqueJugsQ = intval($antiqueJugsQ);
                }
                else {
                    $antiqueJugsQ = 0;
                }
                
                if($clearBallStatus != null){
                    $addonString = $addonString . "Clear Antique Ball Jars" . ", ";
                    $ClearBall = 1;
                }
                else {
                    $ClearBall = 0;
                }
                
                if($blueBallStatus != null){
                    $addonString = $addonString . "Blue Antique Ball Jars" . ", ";
                    $BlueBall = 1;
                }
                else {
                    $BlueBall = 0;
                }
                
                if($deliveryStatus != null){
                    $addonString = $addonString . "Delivery" ;
                    $Delivery = 1;
                }
                else {
                    $Delivery = 0;
                }
            
                echo '<p><b>Add-ons: </b>'. $addonString .' </p>'
                
                ?>
            <?php echo '<p><b>Total Price:</b> $' . $price . ' </p>'?>
            <?php
                
                if ((checkSet($set, $weddingDate) < 1 and ($set == "ModernRound" || $set == "LayeredArch")) || (checkSet($set, $weddingDate) < 2 and ($set == "DarkWalnut" || $set == "RusticWood" || $set == "VintageMirror")))
                {   
                    //TODO ADD Second Name, Email, and Phone
                    $sql = "INSERT INTO `Order`(`FirstName`, `Email`, `Phone`, `SecondName`, `SecondEmail`, `SecondPhone`, `WeddingDate`, `Wedding_Set`, `Package`, `HexagonArch`, `VintageCouch`, `WineJugs`, `AntiqueJugs`, `ClearBall`, `BlueBall`, `Delivery`, `Price`) VALUES ('$name', '$email', '$phone', '$secondName', '$secondEmail', '$secondPhone', '$weddingDate', '$set', '$package', $HexagonArch, $VintageCouch, $wineJugsQ, $antiqueJugsQ, $ClearBall, $BlueBall, $Delivery, $price)";
                    
                    if ($cnxn->query($sql) === TRUE) {
                        echo '<div class="col-12 text-center">';
                        echo 'Congratulations! Your order has been submitted for review!<br><br>';
                        echo '</div>';
                    } else {
                        echo '<div class="col-12 text-center">';
                        echo "Error: ".$sql."<br>".$cnxn->error;
                        echo '</div>';
                    }
                } else {
                 echo '<h1>We\'re so sorry! ' . $set . ' not available ' . ' on ' . $weddingDate . ' Someone might have JUST beaten you to it!</h1>';
                 echo '<h1>Press <a class="redirect" href="https://gray.greenriverdev.com/Sprint4">Here</a> to select a different set or date.</h1>';
                }

            ?>
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