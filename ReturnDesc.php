<?php
require_once 'database.php';

$req_id = $_GET['req_id'];

$sql = "SELECT description FROM request WHERE id='$req_id'";
$result= mysqli_query($connection,$sql);


$jar=array();
    

if($result){
    if($row= mysqli_fetch_assoc($result))
        $jar[] = $row; }
    

    $jsonrespo= json_encode($jar);
    
    
    header("Content-Type:application/json");
    header("Cache-Control:public; max-age:3431901");
     header("Access-Control-Allow-Origin: *");
    print $jsonrespo;
    
  
?>