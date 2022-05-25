<?php
include("database.php");
include("functions.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="stylecss.css">
	<meta name="viewport" content="width=device-width" charset="UTF-8">
</head>



<body>
	<header>
		<div class="container-header">
			<div class="logo">
				<a href=""> <img src="photos/logo2.png" alt="logo"></a>
			</div>

			<div class="navDiv">
				<nav class="nav">
					<ul>
						<li class="navli"><a href="aboutUs.php"> About Us </a></li>
						<li class="navli"><a href="contactUs.php"> Contact Us </a></li>
					</ul>
				</nav>
			</div>

			<div>
			</div>
		</div>

	</header>

	<main>

		<div class="HomePage">

			<div class="log-in">
				<a href="Employee log-in.php"> <button id="Elog-in">Employee Log-in</button> </a>
				<a href="Manager log-in.php"> <button id="Mlog-in">Manager Log-in</button> </a>
			</div>

			<div class="sign-up">
				<p>New Employee? <a href="Employee sign up.php">Sign-up</a></p>
			</div>

		</div>

	</main>

	<footer class="footer-index">
		<div class="footerLinks">
			<ul>
				<li><a href="" target="_blank"> <img src="photos/twitter.png" alt="Twitter"></a></li>
				<li><a href="" target="_blank"> <img src="photos/facebook.png" alt="Facebook"></a></li>
				<li><a href=""> <img src="photos/email.png" alt="Email"></a></li>
			</ul>
		</div>

		<div class="copyright">
			<p>&copy; Copyright 2022</p>
		</div>

	</footer>

	<!-- <script src="script.js"></script> -->

</body>

</html>