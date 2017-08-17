<?php 

$num_rec_per_page=5;
include 'config.php';
if (isset($_GET["page"])) { 
	$page  = $_GET["page"];
	 } 
	 else{ 
	 	$page=1; 
	 } 
$start_from = ($page-1) * $num_rec_per_page; 
$sql="SELECT s.firstname as fn,s.lastname as sl,s.mail as sm,p.order_id as po FROM student s, payment p WHERE s.mail=p.mail LIMIT $start_from,$num_rec_per_page";


	?>
	<table border="1">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Mail</th>
		<th>Order ID</th>
		</tr>
		<?php 
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result)){?>
		<tr>
			<td><?php echo $row['fn'];?></td>
			<td><?php echo $row['sl'];?></td>
			<td><?php echo $row['sm'];?></td>
			<td><?php echo $row['po'];?></td>
		</tr>
		<?php } ?>
	</table><br><br>
<?php $sql="SELECT s.firstname as fn,s.lastname as sl,s.mail as sm,p.order_id as po FROM student s, payment p WHERE s.mail=p.mail";

$result=mysqli_query($conn,$sql);
$total_records=mysqli_num_rows($result);
$total_pages=ceil($total_records/$num_rec_per_page);

echo "<h2><a href='payment_details.php?page=1'>".'|<'."</a></h2> "; // Goto 1st page

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<h2><a href='payment_details.php?page=".$i."'>".$i."</a></h2> "; 
}; 
echo "<h2><a href='payment_details.php?page=$total_pages'>".'>|'."</a> </h2>"; // Goto last page

?>