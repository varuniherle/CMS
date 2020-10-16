<?php 
$from_user = $_POST["fromuser"];
$to_user = $_POST["touser"];
$amt = $_POST["amt"];

include 'connection.php';
$q1 = mysqli_query($conn,"select balance from users where Name = '$from_user';");
$ex1 = mysqli_fetch_array($q1);
$amt1 = $ex1['balance'];

if($from_user==$to_user)
{
	echo "<script>
		alert('Cant transfer')
		window.location.href='Tranfer.php'
		</script>";
}
else{

	if($amt > $amt1)
	{
		echo "<script>
		alert('No sufficent balance')
		window.location.href='Tranfer.php'
		</script>";
	}

	else
	{	
		$ba = $amt1 - $amt;
		$aa = $amt1 + $amt;
		$s1 = "update users set balance = $ba WHERE Name = '$from_user'";
		$s2 = "update users set balance = $aa WHERE Name = '$to_user'";
		$q3 = mysqli_query($conn,$s2);
		$q2 = mysqli_query($conn,$s1);
		echo "hu";
		if($q2)
		{
	      //echo "inserted";
	    echo "<script>
		alert('Transfered')
		window.location.href='index.php'
		</script>";
		}
	}
}
?> 