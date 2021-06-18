<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Registration</title>
</head>
<body>
<?php
    if(!empty($_POST['submit'])) {
        if(empty($_POST['fullName']) || empty($_POST['emailId']) || empty($_POST['phoneNumber']) || empty($_POST['password'])) {
            exit ("please fill all the information. <a href='./registration.php'>return </a>");
        }
        if($_POST['password'] !== $_POST['confirm_password']) {
            exit("please enter same password .  <a href='./registration.php'>return </a>");
        }
        $user_name = addslashes($_POST['fullName']);
        $email_id = addslashes($_POST['emailId']);
        $phone_number = addslashes($_POST['phoneNumber']);
        $password = addslashes($_POST['password']);
        
        //connecting from database 
        require_once("./connection.php");
        $sql = "SELECT * FROM `master_user` WHERE `email_id`='{$_POST['emailId']}'";
        $check_output = $db->query($sql);
        if($check_output->num_rows!==0) {
            exit("User alredy Exit .  <a href='./registration.php'>return </a>");
        }
        $check_output->free();
        $password = md5($password);
        //Now inserting data in database 
        $sql = "INSERT INTO `master_user` SET `username`='{$user_name}', `email_id`='{$email_id}', `phone_no`='{$phone_number}', `password`='{$password}'";
        $result = $db->query($sql);
        if($result === true) {
            header("Location: login.php");
        }else {
            die();
        }
    }

?>
<div class="container-fluid bg-dark d-flex justify-content-center" style="height: 100vh;">
    <div class="my-auto">
    <div class="card" style="width: 30rem;">
    <div class="card-header text-center">
    Registration
  </div>
    <form class="p-4" action="" method="POST">
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" name="fullName" required placeholder="Full Name">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="emailId" required placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="tel" class="form-control" name="phoneNumber" required placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" required placeholder="Password">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" required placeholder="Confirm Password">
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary col">Submit</button>
</form>
  </div>
    </div>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>