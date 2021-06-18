<?php 
    echo "check"."<br>";
    if(!empty($_GET["submit"])) {
        echo "this is user name : ".$_GET['name'];
        echo "<br>";
        echo "this is password :" .$_GET['password'];
    }
?>

<?php 
    if(!empty($_POST["submit"])) {
        if($_FILES['upload']['error'] == 0) {
            if(move_uploaded_file($_FILES['upload']['tmp_name'],"./india/city/".$_FILES['upload']['name'])) {
                echo "file Uploaded";
            } else {
                echo "failure";
            }
        } else {
            echo "something went wrong";
        }
    }
?>