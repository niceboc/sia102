
<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="img/icon.png" sizes="128x128">
</head>
<body>



<!-- Nav Bar -->
<?php include_once 'navigation.php';?>

		<script>
			function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
			}
		</script>
<?php 
// var_dump($_SESSION['useraccounts']);
?>


	<div class="left">
	</div>
		<div class="rcontent">
			<div class="right">
				<p id="title"> Personal Information </p> <br>
				<table>
					<tr>
						<td> First Name <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['firstname']?>" clickable></td>
						<td> Middle Name <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['middlename']?>" clickable></td>
						<td> Last Name <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['lastname']?>" clickable></td>
					</tr>

					<tr>
						<td> Gender <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['gender']?>" clickable></td>
						<td> Age <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['age']?>" clickable></td>
						<td> Birthdate <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['birthdate']?>" clickable></td>
					</tr>

					<tr>
						
						<td> Civil Status<input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['civilstatus']?>" clickable></td>
						<td> Municipality <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['municipality']?>" clickable></td>
						<td> Contact Number <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['contactnumber']?>" clickable></td>
					</tr>

					<tr>
						<td> Email <input type="text" name="" id="" value="<?php echo $_SESSION['useraccounts']['email']?>" clickable></td>
					</tr>
				</table>
			</div>
		</div>
					
</html>
</body>