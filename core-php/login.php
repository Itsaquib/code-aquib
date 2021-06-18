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
<title> Registration Page </title>
</head>
<body>
<?php 
    if(!empty($_POST['submit'])) {
        if(empty($_POST['emailId']) || empty($_POST['password ']))  {
           exit("please fill of field. <a href='./login.php'> return </a>");
        }
        $emailId = addslashes($_POST['emailId']);
        $password = addslashes($_POST['password']);
        require_once("./connect.php");
        $sql ="SELECT * FROM `user_master` WHERE `email_id`='{$emailId}'";
        $check = $var->query($sql);
        if($check === false) {
            exit("SQL Error.  <a href='./login.php'> return </a>");
        }
        if($check->num_rows === 0) {
            exit("Account Not exits !!!! <a href='./login.php'> return </a>");
        }
        // pasword comparing 
        $password = md5($password);
        $array = $check->fetch_array();
        $check->free();
        $var->close();
        if($password === $array['password']) {
            header("Location: crud.php");
        } else {
            exit("password is wrong.   <a href='./login.php'> return </a>");
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