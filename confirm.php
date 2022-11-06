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
 <body>
     <?php
     echo '<div id="'.$_POST['Set'].'" class="text-center">';
        include "includes/header.html";
        echo '<h2>Confirmation</h2>';
        echo '</div>'; ?>
       <?php echo var_dump($_POST); ?>
     <h1>Thank you for your order!</h1>
    <?php $weddingDate = $_POST['WeddingDate'];
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
            $addonString = $addonString . $vintageCouchStatus . ", ";
        }
        
        if($hexagonArchStatus != null){
            $addonString = $addonString . $hexagonArchStatus . ", ";
        }
        
        if($wineJugsStatus != null){
            $addonString = $addonString . $wineJugsStatus . ", ";
        }
        
        if($antiqueJugsStatus != null){
            $addonString = $addonString . $antiqueJugsStatus . ", ";
        }
        
        if($clearBallStatus != null){
            $addonString = $addonString . $clearBallStatus . ", ";
        }
        
        if($blueBallStatus != null){
            $addonString = $addonString . $blueBallStatus . ", ";
        }
        
        if($deliveryStatus != null){
            $addonString = $addonString . $deliveryStatus ;
        }
    
        echo '<p><b>Add-ons: </b>'. $addonString .' </p>'
        
        ?>
    <?php echo '<p><b>Total Price:</b> $' . $price . ' </p>'?>

    <?php include "includes/ordercrumbs.php"; ?>
    <?php include "includes/footer.php"; ?>
</body>
</html>