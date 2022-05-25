<?php


include("database.php");
include("functions.php");

$role = "Employee";

$user_data = check_login($connection, $role);

?>



<!DOCTYPE html>
<html>

<head>
	<title>Add new request</title>
	<link rel="stylesheet" href="stylecss.css">
	<link rel="stylesheet" href="AddRequest.css">
	<meta name="viewport" content="width=device-width">
</head>



<body>

	<header>
		<div class="container-header">
			<div class="logo">
				<a href="Employee home page.php" accesskey="h"> <img src="photos/logo2.png" alt="logo"></a>
			</div>

			<div class="navDiv">
				<nav class="nav">
					<ul>
						<li class="navli"><a href="Employee home page.php"> Home Page </a></li>

					</ul>
				</nav>
			</div>


			<div class="logOut">
				<a href="logOut.php"><img src="photos/logout.png" alt="log out"></a>
			</div>
		</div>

		</div>

	</header>

	<main>
		<div class="card-content">

			<h3>Add a new request</h3>
			<form name="myForm" id="myForm" method="POST" action="functions.php" enctype="multipart/form-data">

				<div class="form-row">
					<div class="containing">


						<div>
							<label for="service">Service type</label>
							<input id="service" class="inNewReq" name="service" type="text" placeholder="Enter your service type" required>
						</div>

						<div>
							<label for="description">Description</label>
							<input id="description" class="inNewReq" name="description" type="text" placeholder="Enter the description" required>
						</div>

						<div>
							<label for="files">Select file:</label>
							<input type="file" name='file_1'  class="fileinput inNewReq">
							<input type="file" name='file_2'  class="fileinput inNewReq">
						</div>

						<input type="submit" class="inNewReq" name='new_request' id="submit" value="Submit" onclick="setdata(); send(); ">

					</div>
				</div>
			</form>
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

	<script src="script.js"></script>

</body>

</html>

