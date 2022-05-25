<?php


include("database.php");
include("functions.php");

$role = "Employee";
$error_msg = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$error_msg = login($connection, $role);
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Employee log-in</title>
	<link rel="stylesheet" href="stylecss.css">
	<meta name="viewport" content="width=device-width" charset="UTF-8">

</head>

<body>

	<header>
		<div class="container-header">
			<div class="logo">
				<a href="index.php" accesskey="h"> <img src="photos/logo2.png" alt="logo"></a>
			</div>

			<div class="navDiv">
				<nav class="nav">
					<ul>
						<li class="navli"><a href="index.php"> Home Page </a></li>
						<li class="navli"><a href="aboutUs.php"> About Us </a></li>
						<li class="navli"><a href="contactUs.php"> Contact Us </a></li>
					</ul>
				</nav>
			</div>

			<div style="background:#ff7984 ;margin-left: 90%; ">
				<p style="color: red; font-size: 90%; text-align: center; padding:2px; "><a href="index.php" style="text-decoration: none;">back</a></p>
			</div>
		</div>

	</header>
	<main>
		<div class="login">
			<div class="form">

				<form name="form2" class="box" method="post">
					<div>
						<h2>Employee Account <br>
							<p id="ph2">Sign in to your account</p>
						</h2>
						<p style="font-size: 15px;margin: 10px;color: white; background:red; text-align: center;"><?php echo $error_msg; ?></p>
					</div>

					<input type="text" name="emp_number" placeholder="Employee's ID">
					<input type="password" name="password" placeholder="Password" id="pwd">
					<input id="button" type="submit" value="Sign in" class="submit">

				</form>

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
</body>

</html>
