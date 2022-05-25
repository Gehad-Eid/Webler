
<!DOCTYPE html>
<html>
	
	<head>
		<title> Contact Us</title>
        <meta name="viewport" content="width=device-width">	
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
			
			#contact {
			width: 100%;
			height: 100%;
			}
			
			.section-header {
			text-align: center;
			margin: 0 auto;
			padding: 40px 0;
			font: 300 60px 'Oswald', sans-serif;
			color: #fff;
			text-transform: uppercase;
			letter-spacing: 6px;
			}
			
			.contact-wrapper {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			margin: 0 auto;
			padding: 20px;
			position: relative;
			max-width: 840px;
			}
			
			/* Left contact page */
			.form-horizontal {
			/*float: left;*/
			max-width: 400px;
			font-family: 'Lato';
			font-weight: 400;
			}
			
			.form-control, 
			textarea {
			width: 100%;
			text-align: center;
			min-height: 30px;
			margin: 5px;
			background-color: #efefef;
			color: #000;
			letter-spacing: 1px;
			}
			
			.send-button {
			margin-top: 15px;
			height: 34px;
			width: 400px;
			overflow: hidden;
			transition: all .2s ease-in-out;
			}
			
			.alt-send-button {
			width: 400px;
			height: 34px;
			transition: all .2s ease-in-out;
			}
			
			.send-text {
			display: block;
			margin-top: 10px;
			font: 700 12px 'Lato', sans-serif;
			letter-spacing: 2px;
			}
			
			.alt-send-button:hover {
			transform: translate3d(0px, -29px, 0px);
			}
			
			/* Begin Right Contact Page */
			.direct-contact-container {
			max-width: 400px;
			}
			
			/* Location, Phone, Email Section */
			.contact-list {
			list-style-type: none;
			margin-left: -30px;
			padding-right: 20px;
			}
			
			.list-item {
			line-height: 4;
			color: #182832;
			}
			
			.contact-text {
			font: 300 18px 'Lato', sans-serif;
			letter-spacing: 1.9px;
			color: #bbb;
			}
			
			.place {
			margin-left: 62px;
			}
			
			.phone {
			margin-left: 56px;
			}
			
			.gmail {
			margin-left: 53px;
			}
			
			.contact-text a {
			color: #bbb;
			text-decoration: none;
			transition-duration: 0.2s;
			}
			
			.contact-text a:hover {
			color: #fff;
			text-decoration: none;
			}
			
			/* Begin Media Queries*/
			@media screen and (max-width: 850px) {
			.contact-wrapper {
			display: flex;
			flex-direction: column;
			}
			.direct-contact-container, .form-horizontal {
			margin: 0 auto;
			}  
			
			.direct-contact-container {
			margin-top: 60px;
			max-width: 300px;
			}    
			.social-media-list li {
			height: 60px;
			width: 60px;
			line-height: 60px;
			}
			.social-media-list li:after {
			width: 60px;
			height: 60px;
			line-height: 60px;
			}
			}
			
			@media screen and (max-width: 569px) {
			
			.direct-contact-container, .form-wrapper {
			float: none;
			margin: 0 auto;
			}  
			.form-control, textarea {
			
			margin: 0 auto;
			}
			
			
			.name, .email, textarea {
			width: 280px;
			} 
			
			.direct-contact-container {
			margin-top: 60px;
			max-width: 280px;
			}  
			.social-media-list {
			left: 0;
			}
			.social-media-list li {
			height: 55px;
			width: 55px;
			line-height: 55px;
			font-size: 2rem;
			}
			.social-media-list li:after {
			width: 55px;
			height: 55px;
			line-height: 55px;
			}
			
			}
			
			@media screen and (max-width: 410px) {
			.send-button {
			width: 99%;
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
					<a href="index.php" accesskey="h" > <img src="photos/logo2.png" alt="logo" ></a>
				</div> 
				
				<div class="navDiv">
					<nav class="nav">			
						<ul>
							<li class="navli"><a href ="index.php"> Home Page </a></li>
							<li class="navli"><a href ="aboutUs.php" > About Us </a></li>
							<li class="navli"><a href ="contactUs.php" > Contact Us </a></li>
						</ul>
					</nav>
					</div> 
				</div> 
			</div>
			
		</header>
		
		<main>
                    <p>  <?php echo $user_data['id']; ?></p>
                    
			<section id="contact">
				
				<h1 class="section-header">Contact</h1>
				
				<div class="contact-wrapper">
					
					<!-- Left contact page --> 
					
					<form id="contact-form" class="form-horizontal" role="form">
						
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-12">
								<input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
							</div>
						</div>
						
						<textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
						
						<button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
							<div class="alt-send-button">
								<i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
							</div>
							
						</button>
						
					</form>
					
					<!-- Left contact page --> 
					
					<div class="direct-contact-container">
						
						<ul class="contact-list">
							<li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Riyadh, Saudi Arabia</span></i></li>
							
							<li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="" title="Give me a call">0548951236</a></span></i></li>
							
							<li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="" title="Send me an email">webler@gmail.com</a></span></i></li>
							
						</ul>
						
						<div class="copyright"></div>
						
					</div>
					
				</div>
				
			</section>  
			
		</main>
		
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
