<!-- 
Prints out all of the previously selected Information and the total estimated price
Collects Name, Email and Phone Number
Submits to vardump.php (or similar page) that displays name, email, phone, set, package, date, extras (these should all be available in the GET or POST array) 
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>extras</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
<?php

$name = $email = $phone =$price ="";
$Set = $_GET['Set'];
$weddingDate = $_GET['WeddingDate'];
$addon = array($_GET['addon']);
$AntiqueJugsQty = $_GET['AntiqueJugsQty'];
$WineJugsQty = $_GET['WineJugsQty'];
$package = empty($_GET['packageUpgrade']) ? $_GET['Package'] : $_GET['packageUpgrade'];
/*$setUpgrade = $_get['setUpgrade'];
if (!empty($setUpgrade)) {
    $package=$_get['setUpgrade'];
}else{
    $package = $_GET['Package'];
} */

echo '<div id="'.$Set.'" class="text-center">'; /* header begins */
include "includes/header.html";
echo '<h2>Reserve</h2>';
echo '</div>'; //header end
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}*/

?>
    <div class="row  text-center">
        <h1>Info</h1>
    </div>
    <form name="reserveForm" action="confirm.php" method="POST">
<?php
    $p="00.00";
    
    echo '<div class="text-center">';
    
    echo '<p>Set: '.$Set.'<br>WeddingDate: '.$weddingDate.'<br>Package: '.$package.'</p>';

    
     if(isset($_GET['submit'])) {
       $addon = $_GET['addon'];
    
       foreach ($addon as $addon=>$value) {
            if ($value == "WineJugs")
            {
                 echo "Addon : ".$value." - ".$WineJugsQty."<br />";
                 echo '<input type="hidden" name="'.$value.'" value='.$value.'>';
            }
            else if ($value == "AntiqueJugs")
            {
                 echo "Addon : ".$value." - ".$AntiqueJugsQty."<br />";
                 echo '<input type="hidden" name="'.$value.'" value='.$value.'>';
            }
            else {
                 echo "Addon : ".$value."<br />";
                 echo '<input type="hidden" name="'.$value.'" value='.$value.'>';
            }
             
             if($value=="HexagonArch"){
                $p = $p + 350;
             }
             if($value=="VintageCouch"){
                $p = $p + 99 ;
             }
             if($value=="WineJugs"){
                $p = $p + 20 * $WineJugsQty;
             }
             if($value=="AntiqueJugs"){
                $p = $p + 4 * $AntiqueJugsQty;
             }
             if($value=="ClearBall"){
                $p = $p + 30 ;
             }
             if($value=="BlueBall"){
                $p = $p + 30 ;
             }
             if($value=="Delivery"){
                $p = $p + 49;
             }
        }
    }
    if($Set == "LayeredArch" and $package == "FullSet"){
        $p = $p + 849;
    }
    if($Set == "LayeredArch" and $package == "PickSix"){
        $p = $p + 749;
    }
    if($Set == "LayeredArch" and $package == "PickFour"){
        $p = $p + 699;
    }
    if($Set == "ModernRound" and $package == "FullSet"){
        $p = $p + 799;
    }
    if($Set == "ModernRound" and $package == "PickSix"){
        $p = $p + 699;
    }
    if($Set == "ModernRound" and $package == "PickFour"){
        $p = $p + 599;
    }
    if($Set == "DarkWalnut" and $package == "FullSet"){
        $p = $p + 299;
    }
    if($Set == "DarkWalnut" and $package == "NoSeating"){
        $p = $p + 245;
    }
    if($Set == "DarkWalnut" and $package == "PickFour"){
        $p = $p + 199;
    }
    if($Set == "RusticWood" and $package == "FullSet"){
        $p = $p + 299;
    }
    if($Set == "RusticWood" and $package == "NoSeating"){
        $p = $p + 245;
    }
    if($Set == "RusticWood" and $package == "PickFour"){
        $p = $p + 199;
    }
    if($Set == "VintageMirror" and $package == "Platinum"){
        $p = $p + 849;
    }
    if($Set == "VintageMirror" and $package == "Gold"){
        $p = $p + 799;
    }
    if($Set == "VintageMirror" and $package == "PickSix"){
        $p = $p + 649;
    }
    if($Set == "VintageMirror" and $package == "PickFour"){
        $p = $p + 599;
    }
    
    /*if (in_array("HexagonArch", $addon)) //code method wise maybe wrong function//
         $p = $p + 350;
    }*/
    echo '<p>Price:'.$p.'</p>';
         
    echo'</div>';
        ?>
    
    <div class="text-center ">
        Name: <input type="text" name="name" value="<?php echo $name;?>" required>

        E-mail: <input type="email" name="email" value="<?php echo $email;?>" required>
        
        Phone: <input type="tel" name="phone" value="<?php echo $phone;?>" required>
    </div>
    <div class="text-center">
        
        
        
        
    </div>
    <!--
    <div class="input-group mb-3 text-center ">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  </div>
  <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)" value="<?php echo $price;?>">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
  </div>
  -->

    <div class="row">
        <?php
        echo '<input type="hidden" name="AntiqueJugsQty" value='.$AntiqueJugsQty.'>';
        echo '<input type="hidden" name="WineJugsQty" value='.$WineJugsQty.'>';
        echo '<input type="hidden" name="WeddingDate" value='.$weddingDate.'>';
        echo '<input type="hidden" name="Set" value='.$Set.'>';
        echo '<input type="hidden" name="Package" value='.$package.'>';
        echo '<input type="hidden" name="Price" value='.$p.'>';
        ?>
        <div class="text-center">
            <input type="submit" id="checkAvailability" name="submit" value="Reserve">
        </div>
    </div>
</form>
    <?php include "includes/ordercrumbs.php"; ?>
    <?php include "includes/footer.php"; ?>
</body>
</html>
