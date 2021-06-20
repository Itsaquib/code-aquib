<?php
    if(isset($_COOKIE['id']) && isset($_COOKIE['verify'])) {
        // deactive cookies from here 
        setcookie("id","",time()-1,"/");
        setcookie("verify","",time()-1,"/");
        echo "logout Successfull";
        header("Location: login.php");
    } else {
        exit("Please Login First. <a href='./login.php'> Login </a>");
    }
?>