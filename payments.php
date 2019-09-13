<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Digi Pay</title>
</head>
<body>

<form action="https://digipaym.000webhostapp.com/LoginPage.php" method="POST">

	<!-- Amount: -->
	<input type="hidden" name="amount" value="<?php echo $_SESSION['total']; ?>"> <br>

	<!-- Merchant Username: -->
	<input type="hidden" name="merchant" value="storegoodbook@gmail.com"> <br>

	<!-- Merchant AccNo: -->
	<input type="hidden" name="acc_no" value="4922892837283854"> <br>

	<input type="submit" value="PAY">

</form>

</body>
</html>