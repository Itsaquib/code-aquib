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
<title>Login</title>
</head>
<body>
<?php 
  if(!empty($_POST['submit'])) {
    if(empty($_POST['emailId']) || empty($_POST['password'])) {
      exit("please fill all details. <a href='./login.php'>return </a>");
    }
    require_once("./connection.php");
    $sql = "SELECT * FROM `master_user` WHERE `email_id`='{$_POST['emailId']}'";
    $result = $db->query($sql);
    if($result->num_rows===0) {
      exit("Email Id not Exits. <a href='./login.php'>return </a>");
    }
    $array = $result->fetch_array();
    $result->free();
    $db->close();
    $password = md5($_POST['password']);
    if($password === $array['password']) {
      header("Location: index.php");
    } else {
      exit("Worng Password . <a href='./login.php'>return </a>");
    }

  }
?>
<div class="container-fluid bg-dark d-flex justify-content-center" style="height: 100vh;">
    <div class="my-auto">
    <div class="card" style="width: 30rem;">
    <div class="card-header text-center">
    Login 
  </div>
    <form class="p-4" action="" method="POST">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="emailId" required placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" required placeholder="Password">
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary col">Login</button>
</form>
  </div>
    </div>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>