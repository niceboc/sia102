<?php
require_once('config.php');

session_start();
?>
<div class="topnav" id="myTopnav">
			
            <a href="index.php?logout=true">Logout</a>
			<a href="profile.php" class="active"> PROFILE </a>
			<a href="faqs.php"> FAQs </a>
			<a href="doctors.php"> OUR DOCTORS </a>
			<a href="index.php"> HOME </a>

			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
			<p class="sname"> Online Doctor Consultation </p>
		</div>