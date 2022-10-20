<!-- 
Only shows the available extras using PHP**
If its available, allows user to visually pick between the available packages
Delivery is also an option at the bottom, looks visually different
Submits to reserve.php 
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

    <?php
        $set = $_GET['Set'];
        $weddingDate = $_GET['WeddingDate'];
        $package = $_GET['package'];
        
        echo '<h1>' . $set . '</h1>';
        echo '<h1>' . $weddingDate . '</h1>';
        echo '<h1>' . $package . '</h1>';
    ?>
    </body>
</html>