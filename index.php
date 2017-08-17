<?php session_start(); echo $_SESSION['mail'];?>

<!DOCTYPE html>
<html>
<head>
	<title>Inserting records</title>
</head>
<body>
<form method="post" action="register.php" style="margin: 10% 10% 10% 10%">
	<input type="text" name="firstname" placeholder="Enter First Name" required><br><br>
	<input type="text" name="lastname" placeholder="Enter last Name" required><br><br>
	<input type="text" name="mail" placeholder="Enter Email ID" required><br><br>
	<input type="text" name="phone" placeholder="Enter Phone Number" required><br><br>
	<input type="submit" value="Register">
</form>
<form method="post" action="payment.php" style="margin: 10% 10% 10% 10%">

	<input type="number" min="0" name="order" placeholder="Enter order Number" required><br><br>
	<input type="submit" value="Payment">
</form>
</body>
</html>