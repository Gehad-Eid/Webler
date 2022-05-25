<?php



include("database.php");
include("functions.php");

$role = "Employee";

$user_data = check_login($connection, $role);


if (!isset($_GET['id'])) {
	header('Location: Employee home page.php');
}

$reqId = htmlspecialchars($_GET['id']);
$reqInfoSql = "SELECT * FROM `request` WHERE `id` = '$reqId';";
$reqInfoRes = mysqli_query($connection, $reqInfoSql);
$reqInfo = mysqli_fetch_assoc($reqInfoRes);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Edit request</title>
	<link rel="stylesheet" href="stylecss.css">
	<link rel="stylesheet" href="EditRequest.css">
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
		<div class="card-content2">

			<h3>Edit a request</h3>
			<form name="myForm" id="myForm" method="POST" action="functions.php" enctype="multipart/form-data">

				<div class="form-row2">
					<div class="containing2">
						<div>
							<label for="service">Service type</label>
							<input type="hidden" value="<?= $reqInfo['id'] ?>" name="requestId">
							<input type="hidden" value="<?= $reqInfo['attachment1'] ?>" name="attachment1Loc">
							<input type="hidden" value="<?= $reqInfo['attachment2'] ?>" name="attachment2Loc">
							<input type="hidden" name="action" value="edit">
							<!-- <input id="service" class="inEdit" name="serviceId" type="text" onkeyup="localStorage.userEdits=this.value" placeholder="Enter your service type" required> -->
							<?php
							$allServiceSql = "SELECT * FROM `service`;";
							$allServiceRes = mysqli_query($connection, $allServiceSql);
							?>
							<select id="service" class="inEdit" name="serviceId" type="text">
								<?php while ($allServiceRow = mysqli_fetch_assoc($allServiceRes)) { ?>
									<option <?= $allServiceRow['id'] == $reqInfo['service_id'] ? 'selected' : '' ?> value="<?= $allServiceRow['id'] ?>"><?= $allServiceRow['type'] ?></option>
								<?php } ?>
							</select>
						</div>

						<div>
							<label for="description">Description</label>
							<input id="description" class="inEdit" name="description" type="text" onkeyup="localStorage.userEdits1=this.value" placeholder="Enter the description" value="<?= $reqInfo['description'] ?>" required>
						</div>

						<div class="attach">
							<input type="file" class="inEdit" name="attachment1" onchange="showname(); saveEdits()" id="fileinput" class="lol">

							<h5>
								attachment :
								<a href="<?= $reqInfo['attachment1'] ?>"><?= $reqInfo['attachment1'] ?></a>
							</h5>
						</div>

						<div class="attach">
							<input type="file" class="inEdit" name="attachment2" onchange="showname(); saveEdits()" id="fileinput2" class="lol">

							<h5>
								attachment :
								<a href="<?= $reqInfo['attachment2'] ?>"><?= $reqInfo['attachment2'] ?></a>
							</h5>
						</div>

						<input type="submit" class="inEdit" id="submit" name="submit" value="Update" onclick="showname(); setdata()">
						<div id="update"> </div>

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
	<script>
		function showname() {

			var input = document.getElementById("fileinput");
			var input2 = document.getElementById("fileinput2");

			localStorage.setItem("server", input.value);
			localStorage.setItem("server1", input2.value);

		}

		function saveEdits() {
			var storedValue = localStorage.getItem("server");
			var storedValue1 = localStorage.getItem("server1");
			var input = document.getElementById("fileinput");
			var input2 = document.getElementById("fileinput1");
			var name1 = storedValue.innerHTML;
			var name2 = storedValue1.innerHTML;
			var j = document.getElementById("hi");
			var k = document.getElementById("ki");
			if (localStorage.userEdits != null) {
				j.innerHTML = storedValue.replace(/.*(\/|\\)/, '');
				k.innerHTML = storedValue1.replace(/.*(\/|\\)/, '');
			}
		}
	</script>

</body>

</html>
