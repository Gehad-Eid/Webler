<?php
require_once 'database.php';
session_start();

$target_dir = 'media/';
/*
 * insert a manager

               $newPass= password_hash("987654321", PASSWORD_DEFAULT);

               $sql2 = "insert into manager (first_name,last_name,username,password) values ('danah ','omar','Danah123','$newPass')";

               mysqli_query($connection, $sql2);   */



// check if user is loged in
function check_login($connection, $role)
{

  if (isset($_SESSION['userId']) && isset($_SESSION['role'])) {
    if ($role == "Employee" || $role == "Manager") {
      if ($role == $_SESSION['role']) {
        if (isset($_SESSION['userId'])) {
          $id = $_SESSION['userId'];
          $sql = "SELECT * FROM " . strtolower($role) . " WHERE id = '$id' limit 1";
          $result = mysqli_query($connection, $sql);
          if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
          }
        }
      }
    }
  }
  header("Location: index.php");
}

//check if the user is manager or employee
function check_two_users()
{

  $role = $_SESSION['role'];

  return $role;
}



//sign up employee
function signup($connection, $role)
{
  $emp_number = $_POST['emp_number'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $job_title = $_POST['job_title'];
  $password = $_POST['password'];

  $msg = "";

  if (!empty($emp_number) && !empty($first_name) && !empty($last_name) && !empty($job_title) && !empty($password)) {
    if (preg_match('/^[0-9]{6}+$/', $emp_number)) {
      $sql = "select emp_number from employee where emp_number ='$emp_number' ";
      $result = $connection->query($sql);
      if ($result->num_rows > 0) {
        $msg = "This employee is already exists ,please try again with correct id";
        return $msg;
      } else if (preg_match('/^[a-zA-Z]{2,20}+$/', $first_name) && preg_match('/^[a-zA-Z]{2,20}+$/', $last_name)) {
        if (preg_match('/^[a-zA-Z0-9]{8,}+$/', $password)) {

          $newPass = password_hash($password, PASSWORD_DEFAULT);

          $sql2 = "insert into employee (emp_number,first_name,last_name,job_title,password) values ('$emp_number','$first_name','$last_name','$job_title','$newPass')";

          mysqli_query($connection, $sql2);


          $sql3 = "select * from employee where emp_number ='$emp_number' ";
          $result3 = mysqli_query($connection, $sql3);
          $row = mysqli_fetch_assoc($result3);

          $_SESSION['userId'] = $row['id'];
          $_SESSION['role'] = $role;

          header("Location: Employee home page.php");
        } else {
          $msg = "password be at least 8 or more characters without spicial characters";
          return $msg;
        }
      } else {
        $msg = "first name and last name must be characters and more than 2";
        return $msg;
      }
    } else {
      $msg = "id must be 6 digits";
      return $msg;
    }
  } else {
    $msg = "Please try again and make sure you fill out all the fields !";
  }

  return $msg;
}



//log in employee and manager
function login($connection, $role)
{

  if ($role == "Employee") {
    $emp_number = $_POST['emp_number'];
    $password = $_POST['password'];


    if (!empty($emp_number) && !empty($password)) {
      if ((preg_match('/^[0-9]{6}+$/', $emp_number)) && (preg_match('/^[a-zA-Z0-9]{8,}+$/', $password))) {

        $sql = "select * from employee where emp_number ='$emp_number' ";
        $result = mysqli_query($connection, $sql);


        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {


              $_SESSION['userId'] = $row['id'];
              $_SESSION['role'] = "Employee";

              header("Location: Employee home page.php");
            }
          }
          $msg = "wrong Id or Password";
          return $msg;
        } else {
          $msg = "wrong Id or Password";
          return $msg;
        }
      } else {
        $msg = "wrong Id or Password";
        return $msg;
      }
    } else {
      $msg = "please fill out the empty fields";
      return $msg;
    }
  } else if ($role == "Manager") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (!empty($username) && !empty($password)) {
      if ((preg_match('/^[a-zA-Z0-9]{6,20}+$/', $username)) && (preg_match('/^[a-zA-Z0-9]{8,}+$/', $password))) {

        $sql = "select * from manager where username ='$username' ";
        $result = mysqli_query($connection, $sql);


        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {


              $_SESSION['userId'] = $row['id'];
              $_SESSION['role'] = "Manager";

              header("Location: Manager home page.php");
            }
          }
          $msg = "wrong username or Password";
          return $msg;
        } else {
          $msg = "wrong username or Password";
          return $msg;
        }
      } else {
        $msg = "wrong username or Password";
        return $msg;
      }
    } else {
      $msg = "please fill out the empty fields";
      return $msg;
    }
  }
}


///===================================================================================================

function get_service_id($conn,$service){
  $query="SELECT * FROM service WHERE type='$service'";
  $result=$conn->query($query);
  if($result->num_rows>0){
    return $result->fetch_assoc()['id'];
  }
  return add_service($conn,$service);
}

function add_service($conn,$service){
  $query="INSERT INTO service (type) VALUES ('$service')";
  if($conn->query($query)){
    return $conn->insert_id;
  }else{
    die("Error while creating service");
  }
}

if (isset($_POST['new_request'])) {
  $service = ucwords(trim($_POST['service']));
  $des = $_POST['description'];
  $file_1 =  basename($_FILES["file_1"]["name"]);
  $file_2 =  basename($_FILES["file_2"]["name"]);
  $emp_id = $_SESSION['userId'];

  $service_id=get_service_id($connection,$service);
  if ($service) {
    move_uploaded_file($_FILES["file_1"]["tmp_name"], $target_dir . $file_1);
    move_uploaded_file($_FILES["file_2"]["tmp_name"], $target_dir . $file_2);
    $service = $connection->query("SELECT * FROM service WHERE type='$service'")->fetch_array();
    $service_id = $service['id'];
    $insert = "INSERT INTO request (service_id,emp_id,description,attachment1,attachment2,status) VALUES ('$service_id','$emp_id','$des','$file_1','$file_2','In Progress')";
    $create_request = $connection->query($insert);
    if (!$create_request) die($connection->connect_error);
    if ($create_request) {
      $request = $connection->query("SELECT * FROM request WHERE (description='$des' and service_id='$service_id')")->fetch_array();
      $requ_id = $request['id'];
      header("Location: Request information.php?id=$requ_id");
    }
  }
}

if (isset($_POST['action']) && $_POST['action'] == 'edit') {
  $service_id = $_POST['serviceId'];
  $des = $_POST['description'];
  $emp_id = $_SESSION['userId'];
  $reqId = $_POST['requestId'];

  $file_query_str = "";
  if (!empty($_FILES["attachment1"]["name"])) {
    $file_1 =  strval(time() + rand(11111, 99999)) . '-' . basename($_FILES["attachment1"]["name"]);
    move_uploaded_file($_FILES["attachment1"]["tmp_name"], $target_dir . $file_1);
    $file_query_str .= ", attachment1='$file_1'";
  }
  if (!empty($_FILES["attachment2"]["name"])) {
    $file_2 =  strval(time() + rand(11111, 99999)) . '-' . basename($_FILES["attachment2"]["name"]);
    move_uploaded_file($_FILES["attachment2"]["tmp_name"], $target_dir . $file_2);
    $file_query_str .= ", attachment2='$file_2'";
  }

  $query = $connection->query("UPDATE request set service_id='$service_id', description='$des' $file_query_str WHERE id='$reqId'");
  if ($query) {
    header("Location: Request information.php?id=$reqId");
  }
}


if (isset($_GET['requ_info'])) {
  $requ = $_GET['requ_info'];
  $query = $connection->query("SELECT * FROM request WHERE id='$requ'");

  if ($query->num_rows > 0) {
    $request_info = $query->fetch_array();
    $ser_id = $request_info['service_id'];
    $description = $request_info['description'];
    $emp = $request_info['emp_id'];
    $emp_info = $connection->query("SELECT * FROM employee WHERE id='$emp'")->fetch_array();
    $service_info = $connection->query("SELECT * FROM service WHERE id='$ser_id'")->fetch_array();
  }
}


if (isset($_GET['approve_req'])) {
  $req_id = $_GET['approve_req'];
  $connection->query("UPDATE request SET status='Approved' WHERE id='$req_id'");
  header("Location: Manager home page.php");
}

if (isset($_GET['decline_req'])) {
  $req_id = $_GET['decline_req'];
  $connection->query("UPDATE request SET status='Decline' WHERE id='$req_id'");
  header("Location: Manager home page.php");
}


 ///===================================================================================================
