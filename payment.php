<?php
session_start(); 
if($_SERVER['REQUEST_METHOD']=="POST"){
	
	include 'config.php';
	$order=$_POST['order'];
	$mail=$_SESSION['mail'];
	$sql="INSERT INTO `payment`(`order_id`, `mail`) VALUES ('$order','$mail');";

	$result=mysqli_query($conn,$sql);

	if($result){
		session_destroy();
	}else{
		echo "Failed";
	}
}else{
	echo "Posting field required";
}

?>