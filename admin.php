<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title></title>
</head>
    <body>
    
        <?php

        $password = $_POST['admin_password'];
        $username = $_POST['username'];
        
        if ($password == 'admin' && $username == 'admin') {
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