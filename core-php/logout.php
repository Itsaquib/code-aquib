<?php 
    if(isset($_COOKIE['id']) && isset($_COOKIE['security'])) {
        setcookie("id", "", time()-1,"/");
        setcookie("security", "", time()-1, "/");
        echo "logout Successfull";
    } else {
        exit("Please Login First. <a href='./login.php'> Login </a>");
    }
?>