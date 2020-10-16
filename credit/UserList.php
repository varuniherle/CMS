<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>View details</title>
    
</head>
<body>
    
    <div class="sidenav">
  <a href="index.php">Home</a>
  <a href="Tranfer.php">Transfer money</a>
  <a href="UserList.php">User List</a>
</div>

    <div class="main">
    <h1>User Details</h1>
    <br>
    <table align ="center" class = "table table-hover" >
        
        
        <th>Name</th>
        <th>Email</th>
        <th>Balance</th>

<?php

include 'connection.php';


$q1=mysqli_query($conn,"select * from users ;");

if($q1)
{
    $num = mysqli_num_rows($q1);
    if($num==0)
    {
        echo "huh";
        
    }
    
    else{
    while($row = mysqli_fetch_array($q1))
 {
     $name = $row['Name'];
     $mail = $row['Email'];
     $balance = $row['balance'];
     

     echo "<tr>";
     echo "<td>$name</td>";
     echo "<td>$mail</td>";
     echo "<td>$balance</td>";
     echo "</tr>";
       
 }
}
}
else{
    echo "checkkk upadation";
}
?>
</table>
</div>

</body>
</html>