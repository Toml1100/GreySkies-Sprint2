<?php
    $emailString = '
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
        </thead>';
    require '../../db.php';
    $ptime = time();
    $start = date('Y-m-d', strtotime($ptime));
    $finish = date('Y-m-d', strtotime($weddingDate. ' + 31 days'));

    $sql = "SELECT * FROM `Order` WHERE WeddingDate BETWEEN '$start' AND '$finish' ORDER BY WeddingDate";
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
        
        $emailString .= '<tr><td scope="col">'. $date .'</td>';
        $emailString .= '<td scope="col">'. $name .'</td>';
        $emailString .=  '<td scope="col">'. $set .'</td>';
        $emailString .=  '<td scope="col">'. $phone .'</td>';
        $emailString .=  '<td scope="col">'. $email .'</td>';
        $emailString .=  '<td scope="col">'. $name2 .'</td>';
        $emailString .=  '<td scope="col">'. $phone2 .'</td>';
        $emailString .=  '<td scope="col">'. $email2 .'</td>';
        
        $emailString .=  '<td scope="col"><a href="gray.greenriverdev.com/Sprint5/admin.php">Log in</a></td>';
        $emailString .=  '<td scope="col"> to confirm/cancel</td>';
        
        $emailString .= '</tr>';
    }

    $emailString .= '</table>';    
    //Recipient
    $to = 'intheofthe@gmail.com';
    
    //Subject
    $subject = 'Reservations for '.date('M', $ptime);
    
    //Message
    $message = $emailString;
    
    //headers 
    $headers = "From: Sender <intheofthe@gmail.com>\r\n";
    $headers .= "Reply-To: <intheofthe@gmail.com>\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    //Send Email
    mail($to, $subject, $message, $headers);
    
?>