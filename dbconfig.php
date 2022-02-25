<?php
$servername="localhost";
$user="root";
$dbname="signup";
$passworddb="123";

$con=new mysqli($servername,$user,$passworddb,$dbname,);
if($con->connect_error)
{
	echo "Database connection failure";
	
}

?>







