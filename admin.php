<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title></title>
</head>
    <body>

        <?php
        require '../../db.php';
        
        if ($_POST['username'] == "logout") {
            session_destroy();
        }
        $_SESSION['password'] = $_POST['admin_password'];
        $_SESSION['username'] = $_POST['username'];
        $conoid = $_GET['conoid'];
        $canoid = $_GET['canoid'];
        
        if (isset($conoid)) {
            $_SESSION['password'] = 'admin';
            $_SESSION['username'] = 'admin';
            $sql = "UPDATE `Order` SET `isConfirmed`=1 WHERE OrderId=$conoid";
            if ($cnxn->query($sql) === TRUE) {
                echo '<div class="col-12 text-center">';
                echo 'Thanks! The order was confirmed.<br><br>';
                echo '</div>';
            } else {
                echo '<div class="col-12 text-center">';
                echo "Error: ".$sql."<br>".$cnxn->error;
                echo '</div>';
            }
        }
        if (isset($canoid)) {
            $_SESSION['password'] = 'admin';
            $_SESSION['username'] = 'admin';
            $sql = "DELETE FROM `Order` WHERE OrderId=$canoid";
            if ($cnxn->query($sql) === TRUE) {
                echo '<div class="col-12 text-center">';
                echo 'Thanks! The order was taken ENTIRELY out of the database...<br><br>';
                echo '</div>';
            } else {
                echo '<div class="col-12 text-center">';
                echo "Error: ".$sql."<br>".$cnxn->error;
                echo '</div>';
            }
        }
        
        if ($_SESSION['password'] == 'admin' && $_SESSION['username'] == 'admin') {
            include 'includes/admin_table.php';

        } else {
            include 'includes/login.php';
        }
        

        ?>
        <!--Password protect this page: user: admin, password: admin-->
        <!--Once logged in, show the upcoming reservations, including:-->
        <!--Date, Name, Set, Phone, Email-->
        <!--Order the reservations by date-->
    </body>
</html>