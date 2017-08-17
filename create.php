<?php 

$hostname="localhost";
$username="root";
$password="";

$con=mysqli_connect($hostname,$username,$password);

$sql="CREATE DATABASE IF NOT EXISTS paging";

mysqli_query($con,$sql);

$dbname="paging";

mysqli_close($con);

$conn=mysqli_connect($hostname,$username,$password,$dbname);

$sql="CREATE TABLE IF NOT EXISTS student(firstname VARCHAR(255) NOT NULL,lastname VARCHAR(255) NOT NULL,mail VARCHAR(25) NOT NULL,phone VARCHAR(12) NOT NULL,PRIMARY KEY(mail)) ENGINE=InnoDB";

mysqli_query($conn,$sql);

$sql="CREATE TABLE IF NOT EXISTS payment(id INT NOT NULL AUTO_INCREMENT,order_id INT NOT NULL,mail VARCHAR(25) NOT NULL,PRIMARY KEY (id),
    FOREIGN KEY (mail) REFERENCES student(mail)) ENGINE=InnoDB";

mysqli_query($conn,$sql);
mysqli_close($conn);

?>