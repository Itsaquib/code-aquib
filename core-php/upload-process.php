<?php 
    if(!empty($_POST['submit'])) {
        if($_FILES['upload']['error'] === 0) {
            // var_dump($_FILES);
            switch($_FILES['upload']['type']) {
                case"image/jpeg": echo "file type accepted";
                break;
                case"image/png": echo "file type accepted";
                break;
                default: exit("Illegal File types ");  // illegal file type shut down program here
            }

            // new file name 
            // get file extension first 
            $array = explode(".",$_FILES['upload']['name']);
            $file_extension_name = array_pop($array);

            // now give a new  file name 
            $new_file_name = time().rand(1000,9999).".".$file_extension_name;
            $new_file_destination = "./".date('Y')."/".date('m')."/".date('d');
            if(!is_dir($new_file_destination)) {
                mkdir($new_file_destination,0777,true);
                $directory = $new_file_destination."/".$new_file_name;
            } else {
                // file already exits 
                $directory = $new_file_destination."/".$new_file_name;
            }
            if(move_uploaded_file($_FILES['upload']['tmp_name'],$directory)) {
                echo "file uploads succesfull";
            } else {
                echo "failure";
            }
        } if($_FILES['upload']['error'] === 1 || $_FILES['upload']['error'] === 2) {
            echo " file size too big. chose a smaller one";
        }
    } 
?>