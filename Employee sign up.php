<?php 


	include("database.php");
	include("functions.php");
$error_msg = '';
$role="Employee";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
            $error_msg = signup($connection,$role);

            }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Employee sign up</title>
        <link rel="stylesheet" href="stylecss.css">
       <meta name="viewport" content="width=device-width">		

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
							<li class="navli"><a href="index.php" > Home Page </a></li>
							<li class="navli"><a href ="aboutUs.php" > About Us </a></li>
							<li class="navli"><a href ="contactUs.php" > Contact Us </a></li>
						</ul>
					</nav>
				</div> 
				
				<div style="background:#ff7984 ;margin-left: 90%; ">
                                    <p style="color: red; font-size: 90%; text-align: center; padding:2px; "><a href="index.php" style="text-decoration: none;">back</a></p>
                                </div> 
			</div> 
			
		</header>
    
    <main>
       <div class="signup">

	<div id="box">
            	<div class="form">
         	<form name="form2" class="box" method="post">
            <div><h2>Employee New Account <br> <p id="ph2">Create your account</p></h2><p  style="font-size: 15px;margin: 10px;color: white; background:red; text-align: center;"><?php echo $error_msg; ?></p></div>

                         <input type="text" name="emp_number" placeholder="Employee's ID">
                        <input type="text" name="first_name" placeholder="First Name">
                	<input type="text" name="last_name" placeholder="Last Name">
                        <select class="jobtitle" name="job_title">
							<option disabled selected value= "jobtitle">Job Title</option>
							<option value= "Accountant">Accountant</option>
							<option value= "Software Engineer">Software Engineer</option>
							<option value= "Web Designer">Web Designer</option>
							<option value= "Cloud Architect">Cloud Architect</option>
							<option value= "Programmer">Programmer</option>
			</select>
			<input type="password" name="password" placeholder="Password" id="pwd">
			<input id="button" type="submit" value="Sign up" class="submit">

                </form>
	</div>
        </div>
       </div>
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
</body>
</html>

