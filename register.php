<?php
error_reporting(-1);
ini_set( 'display_errors', 1 );
include 'config.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
	
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mail=$_POST['mail'];
	$phone=$_POST['phone'];
	$sql="INSERT INTO student(firstname,lastname,mail,phone)VALUES('$firstname','$lastname','$mail','$phone')";

	$result=mysqli_query($conn,$sql);
	if($result){
	
		$sql="SELECT mail FROM student WHERE mail='$mail'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['mail']=$row['mail'];}
	
}else{
	echo "Posting filed required";
}

?>