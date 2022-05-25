<?php

include("database.php");
include("functions.php");

$role = "Employee";

$user_data = check_login($connection, $role);
?>


<!DOCTYPE html>
<html>

<head>
	<title>Employee home page</title>
	<link rel="stylesheet" href="stylecss.css">
	<meta name="viewport" content="width=device-width">
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
		<!-- ***************************** YOUR CODE *********************** -->

		<div class="welcome">

			<h3> WELCOME <span id="welname"><?php echo $user_data['first_name'] . " " . $user_data['last_name']  ?></span> </h3>
		</div>

		<div class="infocon">
			<div class="info">
				<h5>Employee's ID :<span id="emID"><?php echo $user_data['emp_number']; ?></span> </h5>
				<h5>Job Title : <span id="jopTitle"><?php echo $user_data['job_title']; ?></span> </h5>
			</div>
		</div>

		<!-- ============================================================================================= -->
		<div class="all-tables">

			<h4> Requests </h4>
			<div class="add">
				<a href="Add new request.php"> + new request </a>

			</div>
			<div class="cont-tables">
				<div class="tables">

					<table>

						<caption> in progress </caption>
						<thead>
							<tr>
								<th>request's ID - Service type(request)</th>
								<th>Edit</th>
							</tr>

						</thead>

						<tbody>
							<?php
							$inProgressStatus = 'In Progress';
							$sql = "SELECT `request`.`id` AS `requestId`, `service`.`id` AS `serviceId`, `service`.`type` AS `serviceType` FROM `request`, `service` WHERE `request`.`emp_id` = " . $_SESSION['userId'] . " AND `request`.`service_id` = `service`.`id` AND `request`.`status` IN ('$inProgressStatus');";
							$reqRes = mysqli_query($connection, $sql);
							?>

							<?php while ($reqRow = mysqli_fetch_assoc($reqRes)) { ?>
								<tr>
									<td> <a href="Request information.php?id=<?= $reqRow['requestId'] ?>"> <?= $reqRow['requestId'] ?> - <?= $reqRow['serviceType'] ?> </a> </td>
									<td> <a href="Edit request.php?id=<?= $reqRow['requestId'] ?>"> Edit </a></td>
								</tr>
							<?php } ?>

						</tbody>
					</table>

				</div>


				<!-- ============================================================ -->

				<div class="tables">

					<table>

						<caption> Previous Requests </caption>
						<thead>
							<tr>
								<th>request's ID - Service type (request)</th>
								<th>Status</th>
								

							</tr>

						</thead>

						<tbody>
							<?php
							$approvedStatus = 'Approved';
							$declinedStatus = 'Declined';
							$sql = "SELECT `request`.`id` AS `requestId`, `service`.`id` AS `serviceId`, `service`.`type` AS `serviceType`, `request`.`status` AS `reqStatus`  FROM `request`, `service` WHERE `request`.`emp_id` = " . $_SESSION['userId'] . " AND `request`.`service_id` = `service`.`id` AND `request`.`status` IN ('$approvedStatus', '$declinedStatus');";
							$reqRes = mysqli_query($connection, $sql);
							?>

							<?php while ($reqRow = mysqli_fetch_assoc($reqRes)) { ?>
								<tr>
									<td> <a href="Request information.php?id=<?= $reqRow['requestId'] ?>"> <?= $reqRow['requestId'] ?> - <?= $reqRow['serviceType'] ?> </a> </td>
									<td><?= $reqRow['reqStatus'] ?></td>
								</tr>
							<?php } ?>

						</tbody>
					</table>
				</div>
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

	<script src="script.js"></script>

</body>

</html>
