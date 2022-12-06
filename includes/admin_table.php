<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title></title>

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Set</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Name2</th>
      <th scope="col">Phone2</th>
      <th scope="col">Email2</th>
      <th scope="col">Confirm</th>
      <th scope="col">Cancel</th>
      <!--Date, Name, Set, Phone, Email-->
    </tr>
</thead>
    <?php
    require '/home/graygree/db.php';   
    $sql = "SELECT * FROM `Order` ORDER BY WeddingDate";
    $result = @mysqli_query($cnxn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $orderId = $row['OrderId'];
        $date = $row['WeddingDate'];
        $name = $row['FirstName'];
        $set = $row['Wedding_Set'];
        $phone = $row['Phone'];
        $email = $row['Email'];
        $isConfirmed = $row['isConfirmed'];
        $email2 = $row['SecondEmail'];
        $name2 = $row['SecondName'];
        $phone2 = $row['SecondPhone'];
        
        echo '<tr><td scope="col">'. $date .'</td>';
        echo '<td scope="col">'. $name .'</td>';
        echo '<td scope="col">'. $set .'</td>';
        echo '<td scope="col">'. $phone .'</td>';
        echo '<td scope="col">'. $email .'</td>';
        echo '<td scope="col">'. $name2 .'</td>';
        echo '<td scope="col">'. $phone2 .'</td>';
        echo '<td scope="col">'. $email2 .'</td>';
        if ($isConfirmed) {
            echo '<td scope="col">Confirmed</td>';
        } else {
            echo '<td scope="col"><a href="admin.php?conoid='.$orderId.'">Confirm</a></td>';
        }
        echo '<td scope="col"><a href="admin.php?canoid='.$orderId.'">Cancel</a></td>';
        
        echo '</tr>';
    }
    ?>
    
    <form name="admin_logout" action="admin.php" method="POST" class="login_form">
    <input name="password" type="hidden" value="123">
    <input type="hidden" name="username" value="logout">
    <input type="submit" id="logout" name="submit" value="LOGOUT">

</table>

</body>
</html>