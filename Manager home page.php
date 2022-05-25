<?php



    include("database.php");
    include("functions.php");

        $role ="Manager";

       $user_data = check_login($connection,$role);

?>



<!DOCTYPE html>
<html>

<head>
	<title> Manager home page</title>
	<link rel="stylesheet" href="stylecss.css">
	<meta name="viewport" content="width=device-width">
    <script src="jquery.min.js"></script>
</head>



<body>

	<header>
		<div class="container-header">
			<div class="logo">
				<a href="" accesskey="h" onclick="home(this)"> <img src="photos/logo2.png" alt="logo"></a>
			</div>

			<div class="navDiv">
				<nav class="nav">
					<ul>
						<li class="navli"><a href="" onclick="home(this)"> Home Page </a></li>

					</ul>
				</nav>
			</div>

			<div class="logOut">
				<a href="logOut.php"><img src="photos/logout.png" alt="log out"></a>
			</div>
		</div>

	</header>

	<main>

		<div class="welcome">

			<h3> WELCOME <span id="welname"><?php echo $user_data['first_name'] . " " . $user_data['last_name']; ?></span> </h3>

		</div>

		<form>
			<div class="all-tables">
				<h4> Requests </h4>
					
					<script>
                    $(document).ready(function(){
                         setInterval(function(){
                          $('#cont-tables').load("getRequest.php");
                         }, 1000);

                    });
                    </script>
                
				<div class="cont-tables">
					<div id="cont-tables">

					</div>

				</div>
			</div>
		</form>
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
	<script src="Manager home page.js"></script>

</body>

</html>
