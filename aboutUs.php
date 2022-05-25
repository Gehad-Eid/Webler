<!DOCTYPE html>
<html>
	<head>
	<title>About Us</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		main{
			margin-left:50px;
			min-height:70vh;
			}
			.container-header{
			width: 100%;
			height: 100%;
			overflow: hidden;
			}
			
			.logo{ 
			width: 170px;
			height: 90px;
			float: left;
			}
			
			.logo img {
			display: block;
			margin: auto;
			width: 170px;
			height: 80px;
			}
			
			.navDiv{
			float: left;
			}
			header{
			margin-bottom:20px;
			}
			header nav , .nav ul {
			display:flex;
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			}
			
			.nav li {
			float: left;
			}
			
			.navli a {
			display: flex;
			color: #ff7984;
			text-align: center;
			padding: 30px 16px;
			text-decoration: none;
			justify-content: center;
			}
			
			.nav li a:hover {
			background-color: #66456c;
			}
			
			.logOut{
			float : right;
			visibility : visible;
			}
			
			.logOut img {
			height: 40px;
			margin-top: 14.5px; 
			}
			
			html{
			width: 100%;
			height: 100%;
			margin: 0;
			color:white;
			background-color : #182832;
			font-family: 'Source Sans Pro', sans-serif;
			letter-spacing: 1px;
			}
			
			body {
			font-family: Arial, Helvetica, sans-serif;
			margin: 0;
			}
			
			html {
			box-sizing: border-box;
			}
			
			*, *:before, *:after {
			box-sizing: inherit;
			}
			
			.column {
			float: left;
			width: 33.3%;
			margin-bottom: 16px;
			padding: 0 8px;
			}
			
			.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			margin: 8px;
			}
			
			.about-section {
			padding: 50px;
			text-align: center;
			background-color: #984758;
			color: white;
			}
			
			.container {
			padding: 0 16px;
			}
			
			.container::after, .row::after {
			content: "";
			clear: both;
			display: table;
			}
			
			.title {
			color: grey;
			}
			
			.button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 100%;
			}
			
			.button:hover {
			background-color: #555;
			}
			
			@media screen and (max-width: 650px) {
			.column {
			width: 100%;
			display: block;
			}
			}
			
		footer{ 
			width:100%;  
			padding:10px 0px;
			clear: bottom;
			position:absolute;
			display:block;
			margin-top: 20px;
			text-align: center;
			}
			.footer-index{
			margin-top: auto;
			
			}
			.footerLinks {
			text-align: left;
			float : left;
			}
			.footerLinks ul {
			padding: 0;
			list-style-type: none;
			margin: 0;
			}
			.footerLinks li {
			display: inline;
			width: 10px;
			height: 10px;
			}
			
			.footerLinks img {
			width: 30px;
			height: 30px;
			margin : 10px;
			}
			
			.copyright {
			text-align: center;
			}
			
			.copyright p {
			margin-right: 0;
			width: 90%;
			color: #b3b3b3;
			font-size: 15px;
			}
		</style>
	</head>
	<body>
		<header>
			<div class="container-header">
				<div class="logo">
					<a href ="" onclick="home(this)"> <img src="photos/logo2.png" alt="logo" ></a>
				</div> 
				
				<div class="navDiv">
					<nav class="nav">			
						<ul>
							<li class="navli"><a href ="" onclick="home(this)"> Home Page </a></li>
							<li class="navli"><a href ="aboutUs.html" > About Us </a></li>
							<li class="navli"><a href ="contactUs.html" > Contact Us </a></li>
						</ul>
					</nav>
					</div> 
				</div> 
			</div>
			
		</header>
		
		<div class="about-section">
			<h1>About Us</h1>
			<p>we are Webler.</p>
			<p>we help you to provid your company a good website and server for all your needs.</p>
		</div>
		
		<h2 style="text-align:center">Our Team</h2>
		<div class="row">
			<div class="column">
				<div class="card">
					<img src="photos/logo.png" alt="Gehad" style="width:100%">
					<div class="container">
						<h2>Gehad Eid</h2>
						<p class="title">team member</p>
						<p>gege@example.com</p>
						<p><button class="button">Contact</button></p>
					</div>
				</div>
			</div>
			
			<div class="column">
				<div class="card">
					<img src="photos/logo.png" alt="Rahaf" style="width:100%">
					<div class="container">
						<h2>Rahaf Almeqbil</h2>
						<p class="title">team member</p>
						<p>rahaf@example.com</p>
						<p><button class="button">Contact</button></p>
					</div>
				</div>
			</div>
			
			<div class="column">
				<div class="card">
					<img src="photos/logo.png" alt="kholud" style="width:100%">
					<div class="container">
						<h2>Kholud Aldeghayem</h2>
						<p class="title">team member</p>
						<p>kholud@example.com</p>
						<p><button class="button">Contact</button></p>
					</div>
				</div>
			</div>
			
			<div class="column">
				<div class="card">
					<img src="photos/logo.png" alt="shahad" style="width:100%">
					<div class="container">
						<h2>Shahad Eldebasy</h2>
						<p class="title">team member</p>
						<p>shahad@example.com</p>
						<p><button class="button">Contact</button></p>
					</div>
				</div>
			</div>
		</div>
		
		<footer class="footer-index">
			<div class="footerLinks">
				<ul>
					<li><a href="" target="_blank" > <img src="photos/twitter.png" alt="Twitter" ></a></li>
					<li><a href="" target="_blank" > <img src="photos/facebook.png" alt="Facebook" ></a></li>
					<li><a href="" > <img src="photos/email.png" alt="Email" ></a></li>
				</ul>
			</div>
			
			<div class="copyright">
				<p>&copy; Copyright 2022</p>
			</div>
			
		</footer>
		
		<script src="script.js"></script>
	</body>
</html>

