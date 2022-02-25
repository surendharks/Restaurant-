<?php

  $gender="";
$fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
  $password=$_POST['pwd'];

  $dob=$_POST['dob'];
  if(isset($_POST["gender"]))
  {
      $gender=$_POST["gender"];


  }
  include "dbconfig.php";

$sql="Insert into userdetails (fname,lname,email,dob,gender,password) values ('$fname','$lname','$email','$dob','$gender','$password')";  

if($con->query($sql)===TRUE)
{ 

  echo "<script> alert('account created scessfullly');
  window.location.href='delivery.html';
</script>";

}
else
{
   echo "<script> alert('account creation failed');
 window.location.href='delivery.html';</script>";



 
 
}

 ?>