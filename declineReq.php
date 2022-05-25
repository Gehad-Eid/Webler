<?php
require_once 'database.php';
$req_id = $_GET['req_id'];
$connection->query("UPDATE request SET status='Decline' WHERE id='$req_id'");
return true;
?>