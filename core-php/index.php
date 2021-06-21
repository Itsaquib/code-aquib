<?php 
	// PHp learning 
	// Print 1 to 100;
	// $number = 1;
	// while ($number <= 100)
	// {
	// 	echo $number;
	// 	echo "<br>";
	// 	$number++;
	// }
// 	$counter = 10;
// 	for($loop=0; $loop<=$counter; $loop++) {

// 		echo $loop ." Aquib Shaikh " .$loop;
// 		echo "<br>";
// 	}
	// // Example of Function 
	// function fun(&$num) {
	// 	$sum = 1;
	// 	for($fact=1; $fact<=$num; $fact++) {
	// 		$sum  = $sum * $fact;
	// 		echo $sum ."<br>";
	// 	}
	// 	$sum = null;
	// 	return $sum;
	// }
	// // $output = fun();
	// // echo $output;
	// // function working call by value & call by reference 

	// $number = 5;
	// // $number_1 = 10;
	// fun($number);
	// var_dump($number);

	echo "<h1> Example of Call by reference </h1>";
	function fun($empty1) {
		// echo $empty1;
		$empty1 = 'test';
		return $empty1;
	}
	$string = "aquib";
	$x = fun($string);
	echo "<br>";
	// var_dump($string);
	echo $x;
	var_dump($x);

	?>
	<a href="array.php"> <h1> Array  </h1> </a>
	<a href="files.php"> <h1> Files </h1> </a>
	<a href="form.php"> <h1> Form </h1> </a>
	<a href="car.php"> <h1> Car </h1> </a>
	<a href="sql.php"> <h1> sql </h1> </a>
	<a href="crud.php"> <h1> Crud </h1> </a>
	<a href="registration.php"> <h1> Registration </h1> </a>
	<a href="login.php"> <h1> login </h1> </a>
	<a href="cookie.php"> <h1> cookie </h1> </a>
	<a href="file-form.php"> <h1> upload </h1> </a>