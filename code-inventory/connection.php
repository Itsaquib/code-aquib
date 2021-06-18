<?php 
    $db = new mysqli("localhost", "root","", "code_inventory");
    if($db->connect_error) {
        echo "Database Not connected";
    } else {
        echo "connection ok ";
    }
?>