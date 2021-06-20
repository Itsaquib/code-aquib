<?php 
    if(isset($_COOKIE['id']) && isset($_COOKIE['verify'])) {
        $id = addslashes($_COOKIE['id']);
        $sql = "SELECT * FROM  `master_user` WHERE `id`='{$id}'";
        require_once("./connection.php");
        $result = $db->query($sql);
        if($db->error) {
            exit("SQL ERROR");
        }
        if($result->num_rows===0) {
            exit("Invalid Session .<a href='./login.php'> Login </a> ");
        }
        // now cookies have an id 
        // now verify cookiee
        $array = $result->fetch_array();
        $result->free();
        $re_verify = md5($array['id'].$array['password']."Don");
        if($re_verify === $_COOKIE['verify']) {
            echo "Welcome FOLKS <br>";
            echo $array['username'];
            echo "<a href='./logout.php'> Logout </a>";
        } else {
            exit("Session Expired Please Login Again. <a href='./login.php'> Login </a>");
        }
    } 
    else {
        echo "please Login First .<a href='./login.php'> Login </a>";
        }
?>
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
<title>Inventory</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>