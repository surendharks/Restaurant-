<?php
$email=$_POST['email'];
$password=$_POST['password'];
  include "dbconfig.php";

$ret1="SELECT EMAIL,PASSWORD from userdetails where EMAIL='$email' and PASSWORD='$password'";




$result=$con->query($ret1);



$row1=$result->fetch_assoc();



if(($row1['EMAIL']==$email) and ($row1['PASSWORD']==$password))
{

		echo "<script>alert('logging in');
	window.location.href='user.php';</script>";

	
	
	
	
}
else
{

		echo "<script>alert('credentials failed');
	window.location.href='signing.php';</script>";
	



}



	?>

