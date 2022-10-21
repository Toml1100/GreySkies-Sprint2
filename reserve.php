<!-- 
Prints out all of the previously selected Information and the total estimated price
Collects Name, Email and Phone Number
Submits to vardump.php (or similar page) that displays name, email, phone, set, package, date, extras (these should all be available in the GET or POST array) 
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>reserve</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
$name = $email = $phone="";
$Set = $_GET['Set'];
$weddingDate = $_GET['WeddingDate'];
$package = $_GET['Package'];
echo '<div id="'.$Set.'">';
    include "includes/header.html";
echo '</div>';

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

echo '<p>Set: '.$Set.'<br>WeddingDate: '.$weddingDate.'<br>Package: '.$package.'</p>';

 if(isset($_GET['submit'])) {
   $addon = $_GET['addon'];

   foreach ($addon as $addon=>$value) {
             echo "Addon : ".$value."<br />";
        }
}

/*
*   Note: the following values may be in this array
*   HexagonArch, VintageCouch, WineJugs, AntiqueJugs, ClearBall, BlueBall, Delivery
*   So a separate array with the prices for each should be made and used to add the cost up
*/

?>
<form name="reserveForm" action="vardump.php" method="POST">
    <div class="row  text-center">
        <h1>Info</h1>
    </div>
    <div class="text-center ">
        Name: <input type="text" name="name" value="<?php echo $name;?>">

        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        
        Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
        
        <?php
        echo '<input type="hidden" name="WeddingDate" value='.$weddingDate. '>';
        echo '<input type="hidden" name="Set" value='.$Set.'>';
        echo '<input type="hidden" name="Package" value='.$addon.'>';
        echo '<input type="hidden" name="Package" value='.$package.'>';
        ?>
    </div>
    <div>
        
    </div>
    <div class="row">
        <div class="text-center">
            <input type="submit" id="submit" name="submit" value="submit">
        </div>
    </div>
</form>
<?php include "includes/footer.html"; ?>
</body>
</html>
