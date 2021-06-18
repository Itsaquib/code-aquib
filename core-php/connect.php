<?php 
    // $db = @new mysqli();
    // $db->connect("localhost","root", "", "php-learning1");
    // if($db->connect_error) {
    //     exit("cannot connect to database");
    // }
    // var_dump($db->connect_error);
?>
<?php 
    // $data = @new mysqli("localhost","root", "", "php-learning");
    // // $db->connect("localhost","root", "", "php-learning1");
    // if($data->connect_error) {
    //     exit("cannot connect to database ");
    // }
?>


<?php 
    // other database connection and retriving data from it 
    $var =@new mysqli("localhost","root","","php-learning");
    if($var->connect_error) {
        echo "database not connected";
    }
?> 