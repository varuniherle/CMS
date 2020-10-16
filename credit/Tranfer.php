<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Tranfer</title>
</head>
<body>
	<div class="sidenav">
  <a href="index.php">Home</a>
  <a href="Tranfer.php">Transfer money</a>
  <a href="UserList.php">User List</a>
	</div>
	<div class="main">
	<h1>Transaction</h1>
	<?php include 'connection.php';
		$result = mysqli_query($conn,"SELECT *  FROM users");
		$resul1 = mysqli_query($conn,"SELECT *  FROM users");
	?>
	<center>	
	<div class="Form">
	<form action="calculation.php" method="Post">
		<h2>Enter details</h2><br>		
		<h6 class= From>  From User </h6>

		<select name="fromuser" style="width: 50%; margin-left: 10%; border: 3px double #CCCCCC; padding:5px 10px;" class="form-control" required />
		<?php
            while($tname = mysqli_fetch_array($result))
            {
              	echo "<option value='" . $tname['Name'] . "'>" . $tname['Name'] . "</option>";
            }
        ?>

        </select>

		<h6 class= to>To User </h6>

		<select name="touser" style="width: 50%; margin-left: 10%; border: 3px double #CCCCCC; padding:5px 10px;" class="form-control" required />
	    
		<?php
            while($tname = mysqli_fetch_array($resul1))
            {
               	echo "<option value='" . $tname['Name'] . "'>" . $tname['Name'] . "</option>";
                        
            }
        ?>

        </select>
		<h6> Amount </h6>

		<input style="width: 50%; margin-left: 10%; border: 3px double #CCCCCC; padding:5px 10px;" class="form-control" required name="amt"><br>
		
		<input type="submit" id= submit name="submit" value=" Transfer" class="btn btn-primary">

	</form>
	</div>
	</center>
</div>
</body>
</html>