<?php 

$hostname="localhost";
$username="root";
$password="";
$dbname="paging";

$conn=mysqli_connect($hostname,$username,$password,$dbname);

if($conn){
	echo "Success";
}else{
	require_once('create.php');
}

?>