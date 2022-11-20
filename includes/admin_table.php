<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <!--Date, Name, Set, Phone, Email-->
    </tr>
  </thead>
    <?php
    require '/home/graygree/db.php';   
    $sql = "SELECT * FROM `Order` ORDER BY WeddingDate";
    $result = @mysqli_query($cnxn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $date = $row['WeddingDate'];
        $name = $row['FirstName'];
        $set = $row['Wedding_Set'];
        $phone = $row['Phone'];
        $email = $row['Email'];
        

        echo '<tr><td scope="col">'. $date .'</td>';
        echo '<td scope="col">'. $name .'</td>';
        echo '<td scope="col">'. $set .'</td>';
        echo '<td scope="col">'. $phone .'</td>';
        echo '<td scope="col">'. $email .'</td></tr>';
    }
    

           

 
    ?>
    

    <!--?>-->

</table>

</body>
</html>