<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>PHP Array</title>
  </head>
  <body>
  	
    <h1 class="text-center text-white bg-primary">PHP Array</h1>
    <div class="container-fluid">
    	<div class=" align-items-center justify-content-center bg-info text-white">
    <?php 
    	$indexedArray = array("jeans", "shirt", 36, true, false, "welcome");
    	foreach($indexedArray as $value) {
    		echo "<h1> $value </h1>";
    		echo "<br>";
    	}
    	// echo $indexedArray.length;
    	count($indexedArray);
    	echo "<br>";
    	echo sizeof($indexedArray);
    	// die("here terminated")

    ?>

     
</div>
<div class="bg-success">
     	<?php 

     		$assocaitiveArray = array('key1'=>"aquib", 'key2'=>"shaikh" );
     		foreach ($assocaitiveArray as $key =>$value) {
     			// echo $key." => ".$value."<br>";
     			echo $value." = ".$key."<br>";
     			var_dump(count($assocaitiveArray));
     		}
     	?>
     </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>