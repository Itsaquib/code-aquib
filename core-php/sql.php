<!-- Exapmle of array_fetch_query -->
<?php 
    // $data = @new mysqli("localhost","root", "", "php-learning");
    // // $db->connect("localhost","root", "", "php-learning1");
    // if($data->connect_error) {
    //     exit("cannot connect to database ");
    // }
    // require_once("./connect.php");
    // $sqli = "SELECT * FROM `car_info` LIMIT 3,3";
    // $result = $var->query($sqli);
    // // print_r($result);
    // if($result === false) {
    //     exit("Data NOt Find");
    // }
    // while($array = $result->fetch_array()) {
    //     echo "the engine of this car is ".$array['engine']."<br>";
    //     echo "this car is ".$array['transmission']."<br>";
    //     echo "this car is ".$array['age']." year old & has ".$array['door_no']. " door <br>";
    //     echo "<hr/>";
    // }
    
    // $result->free();
    // $data->close();

    // some SQL method 
    // $varibale_name->fetch_array()
    // $varibale_name->num_rows;
    // TO extract query from database 
    // $assign_variable = $assign_database_name->query($assign_sql_condition) 
    ?> 
    <!-- Example of select query  -->
    <?php
    require_once("./connect.php");
    $sql = "SELECT * FROM `cart` ORDER BY ASC";
    $result = $var->query($sql);
    if($result === false) {
            exit("Data Not Find");
        }
    while($array = $result->fetch_array()){
        echo $array['product_name'] ."<br>";
        echo $array['quantity'] ."<br>";
        echo $array['price'] ."<br>";
    }
    $number = $result->num_rows;
    echo "total number of product are : ".$number;
    ?>

    <!-- exapmle of delete query  -->
    <?php 
    $sql = "DELETE FROM `car_info` WHERE `engine`='petrol'";
    $out = $var->query($sql);
    if($out === true) {
        echo "<br>";
        echo "Item deleted sucessfully";
    } else {
        echo "something goes wrong";
    }
    ?>

    <!-- Example of update query --> 
    <?php 
    $update = "UPDATE `car_info` SET `engine`='auto',`transmission`='non' WHERE `engine`='cng'";
    $out = $var->query($update);
    if($out === true) {
        echo "<br>";
        echo "Fields Updated";
    } else {
        echo "something goes wrong";
    }
    ?>

    <!-- Example of Insert query   -->

    <?php 
    $update =  "INSERT INTO `car_info` SET `engine`='electric', `transmission`='AI', `door_no`='4', `age`='1'";
    $out = $var->query($update);
    if($out === true) {
        echo "<br>";
        echo "Data insert sucessfully";
    } else {
        echo "something goes wrong";
    }
    ?>
