<!DOCTYPE html>
<html>
<head>
	<title>Lounar Sneakers</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./index.css">
	<style>
	    input {
	        padding: 10px 20px;
	        border-radius: 5px;
	        margin-bottom: 7px;
	        border: 0;
	    }
	</style>
</head>
<body>
	
	<!-- Navigation bar -->
	<div class="navigationSection">
		<div class="contentCenterer">
			<a href="../" class="navigationItem">
				Sneakers
			</a>
			<a href="../contact" class="navigationItem">
				Need help?
			</a>
			<a href="../myaccount" style="float: right;" class="bg-lightgray navigationItem">
				My account
			</a>
		</div>
	</div>

	<!-- Page content -->
	<div class="contentSection">

		<!-- Center the content -->
		<div class="contentCenterer">

			<div class="navigationItem" style="visibility: hidden;">Test</div><br>
			<div class="navigationItem" style="visibility: hidden;">Test</div><br>

			<div class="productDisplay">

				<div class="productImgDis" style="background-image: url('https://cdn.wallpapersafari.com/75/10/7ekCyb.jpg')"></div>

				<div class="productPageDescription">
					<div class="desContent">
						<br>
						<table style="width: 100%;">
							<tr style="width: 100%;">
								<td style="width: 50%;">
									<b style="font-size: 300%;">Please enter your details</b><br>
									<span>After submittion, we will review your order and send you an email with a checkout link</span><br>
									<br>
									<span style="font-size: 110%; color: grey;"><?php echo "Order: ".$_POST['product']." in size ".$_POST['size'];?></span><br><br>
									<hr>
									<br>
									<form action="./submit-order.php" method="POST">
									    <input type="hidden" name="order" value="<?php echo $_POST['product'].'-'.$_POST['size']; ?>">
									    <input class="input" required name="firstname" type="text" placeholder="Firstname"><br>
									    <input required name="lastname" type="text" placeholder="Lastname"><br>
									    <input required name="email" type="email" placeholder="Email address"><br>
									    <input required name="address" type="text" placeholder="Address"><br>
									    <input required name="zipcode" type="text" placeholder="Postal code"><br>
									    <input required name="city" type="text" placeholder="City"><br>
									    <br>
									    <button type="submit">Submit order</button>
									</form>
								</td>
							</tr>
						</table>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- Footer -->
	<div class="footerSection">
		<div class="contentCenterer">
			<div class="footerContent">
				Thank you for shopping here
			</div>
		</div>
	</div>

</body>
</html>
