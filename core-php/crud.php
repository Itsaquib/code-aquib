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
<title>Crud operation </title>
</head>
<body>
<?php 
    require_once("./connect.php");
    if(!empty($_POST["submit"])) {
        if(empty($_POST['fullName']) || empty($_POST['emailId']) || empty($_POST['phoneNumber']) || empty($_POST['password'])) {
            echo "please fill of field";
        }
        $insert = "INSERT INTO `user_data` SET `full_name`='{$_POST['fullName']}', `email_id`='{$_POST['emailId']}', `phone_no`='{$_POST['phoneNumber']}', `password`='{$_POST['password']}'";
        $out = $var->query($insert);
        if ($out === true) {
            echo "insert to database";
        } else {
            echo "something goes wrong";
        }
    }

    ?>
    <!-- Add the following at the end of your body tag -->
    <!-- <div class="text-center q-pa-md row justify-between">
    <form action="" method="POST">
    Engine : <input type="text" name="engine" value=""> <br>
    Transmission : <input type="text" name="transmission" value=""><br>
    Door No. : <input type="number" name="door_no" value=""><br>
    age : <input type="number" name="age" value=""><br>
    <input type="submit" name="submit" value="submit">
    </form></div> -->

    <form class="p-5" action="" method="POST">
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" name="fullName" placeholder="Full Name">
    
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="emailId" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
</form>
<div class="p-5">
<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <?php
    $sql = " SELECT * FROM `user_data` ";
    $result = $var->query($sql);
    if($result === false) {
            exit("Data Not Find");
        }
    
    ?>
  <tbody>
  <?php 
    while($array = $result->fetch_array())
    {
    ?>
    <tr>
      <th scope="row"><?php echo $array['user_id']; ?></th>
      <td><?php echo $array['full_name']; ?></td>
      <td><?php echo $array['email_id']; ?></td>
      <td><?php echo $array['phone_no']; ?></td>
      <?php
                }
             ?>
      
    </tr>
  </tbody>
</table></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>