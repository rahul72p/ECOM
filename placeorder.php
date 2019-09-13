<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Order</title>
</head><!--/head-->

<body background="back.jpeg">
	<?php include("navbar.php"); ?>

	<section id="cart_items">
		<div class="container">
		<div class="register-req">
				<br><p><font color="white" size="10px">Please Fill your form carefully so that you get your Order correlty</font>></p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
                <div class="col-sm-1">
						<div class="order-message">

      <form></form>
                  </div></div>
				  <div class="col-sm-8 clearfix">
			   	<div class="bill-to">
							<p><font color="white" size="10px">Information Form</font></p>
							<div class="form-one">
		<form action="orderform.php" method="post" name="form1">
<input type="text" name="name" placeholder="Full Name *" required><br><br>
<input type="text" name="email" placeholder="Email*" required><br><br>
<input type="text" name="address" placeholder="Address *" required><br><br>
								
							
<input type="text" name="contactno" placeholder="Contact # *" required><br>	 <br>
   <input type="text" name="zip_code" placeholder="Zip / Postal Code *"><br><br>
	<select name="country"><br><br>
		<option>-- Country --</option>
        <option value="pakistan">Pakistan</option>
		<option value="uk">UK</option>
		<option value="uae">UAE</option>
		<option value="sudia">Sudia Arab</option>
	</select><br>
		<br><p><font color="white" size="10px">Your Decision</font></p> 													
<button type="submit" name="submit" class="btn btn-primary" >Confirm Order</button>
 
							</div>
							
						</div>
					</div>
						<div class="col-sm-3">
						<div class="shopper-info">
							
</form>
</div></div>				
</div></div>
</div></div>
</section> <!--/#cart_items--><br>
<br><br><br><br>
<?php include("footer.php"); ?>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
<i class="fa fa-angle-up">
</i></a>
</body>
</html>