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
								<td style="width: 50%; text-align: center;">
									<b style="font-size: 300%; ">Thanks for ordering!</b><br><br>
									<span>We have sent a confirmation email to the provided email address. The email contains a link that you can use to pay.</span><br>
								</td>
							</tr>
						</table>
					</div>
				</div>

			</div>

		</div>

	</div>
	
<?php
$to = $_POST['email'];
$subject = "Order confirmation - SneakerShop";

$message = "
<html>
<head>
<title>Email</title>
</head>
<body>
<div style='text-align: center; width: 100%; padding: 20px; background-color: #1a1a1a; color: white;'>
    Order confirmation    
</div>
<div>
    <table>
        <tr>
            <td>Product</td>
            <td>".$_POST['order']."</td>
        </tr>
        <tr>
            <td>Firstname</td>
            <td>".$_POST['firstname']."</td>
        </tr>
        <tr>
            <td>Lastname</td>
            <td>".$_POST['lastname']."</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>".$_POST['address']."<br>".$_POST['zipcode']." ".$_POST['city']."</td>
        </tr>
    </table>
</div>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <order@sneakershop.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>

</body>
</html>
