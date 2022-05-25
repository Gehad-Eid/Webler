<?php



include("database.php");
include("functions.php");

$thisrole = check_two_users($connection);
$user_data = check_login($connection, $thisrole);

if (!isset($_GET['id'])) {
	header('Location: Employee home page.php');
}

$id = htmlspecialchars($_GET['id']);
$reqInfoSql = "SELECT request.*,service.type FROM request inner join service on service.id=request.service_id WHERE request.id='$id'";
$reqInfoRes = mysqli_query($connection, $reqInfoSql);
$reqInfo = mysqli_fetch_assoc($reqInfoRes);

$emp_id=$reqInfo['emp_id'];
$emp_query="SELECT * FROM employee WHERE id='$emp_id'";
$emp_query_result=mysqli_query($connection,$emp_query);
$emp=mysqli_fetch_assoc($emp_query_result);

?>


<!DOCTYPE html>
<html>

<head>
	<title>Request information</title>
	<link rel="stylesheet" href="stylecss.css">
	<meta name="viewport" content="width=device-width">
</head>



<body>
	<header>
		<div class="container-header">
			<div class="logo">
				<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'Employee') {
					echo "<a href='Employee home page.php'>";
				} elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'Manager') {
					echo "<a href='Manager home page.php'>";
				} ?> <img src="photos/logo2.png" alt="logo" /> <?php echo "</a>"; ?>
			</div>

			<div class="navDiv">
				<nav class="nav">
					<ul>
						<li class="navli">
							<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'Employee') {
								echo "<a href='Employee home page.php'>";
							} elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'Manager') {
								echo "<a href='Manager home page.php'>";
							} ?> home page <?php echo "</a>" ?>
						</li>

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
		<?php if (isset($_GET['message'])) { ?>
			<div style="text-align: center; background: green; color: white; padding: 5px; margin-bottom: 20px;"><?= $_GET['message'] ?></div>
		<?php } ?>
		<h2 style="display:inline;" id="h2ser"><?= $reqInfo['type'] ?> </h2>
		<h3 style="color:powderblue; display:inline;"><?= $reqInfo['status'] ?></h3>
		<h4 id="reqName"> <?=$emp['first_name'].' '.$emp['last_name']?> </h4>


		<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'Employee') {
			echo "<a href ='Edit request.php?id=$id'><input type='image' src='photos/edit.png' alt='edit' width='50' height='55' style='padding-bottom: 5px;'></a>";
		} elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'Manager') {
			if($reqInfo['status']=='In Progress'){
				echo "<a href='functions.php?approve_req=$id'><img src='photos/approve.png' alt='edit' width='60' height='60'></a>";
				echo "<a href='functions.php?decline_req=$id'><img src='photos/reject.png' alt='edit' width='60' height='60'></a>";
			}else if($reqInfo['status']=='Approved'){
				echo "<a href='functions.php?decline_req=$id'><img src='photos/reject.png' alt='edit' width='60' height='60'></a>";
			}else{
				echo "<a href='functions.php?approve_req=$id'><img src='photos/approve.png' alt='edit' width='60' height='60'></a>";
			}
			?>
			<?php
		} ?>



		<h3 style="margin-top:50px;">Description</h3>
		<p id="desP"><?= $reqInfo['description'] ?>

		<h3 style="margin-top:50px;">Attachments</h3>
		<div id="attachments" style="width:30%;">
			<?php
			if (empty($reqInfo['attachment1'])) {
				echo "<p>No promotion attachment photo</p>";
			} else {
				echo "<a href='media/" . $reqInfo['attachment1'] . "' target='iframe-a'>".$reqInfo['attachment1']."</a>";
			}
			if (empty($reqInfo['attachment2'])) {
				echo "<p>No promotion attachment pdf</p>";
			} else {
				echo "<a href='media/" . $reqInfo['attachment2'] . "' target='iframe-a'>".$reqInfo['attachment2']."</a>";
			}
			?>
		</div>

		<div id="show-attachments">
			<iframe src="" name="iframe-a" style="border:none;" width="100%" height="99%"></iframe>
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
	<script src="Request information.js"></script>

</body>

</html>
