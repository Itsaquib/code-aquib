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
<title>Title</title>
</head>
<body>
<div class="container-fluid bg-primary text-white">
 <form action="./process.php" method='post'>
 username : <input type="text" name="name" value="" placeholder="username" />
 password : <input type="password" name="password" value="" placeholder="password" />
 <input type="submit" name="submit" value="submit" />
 </form>
 <h1>how using hyper link send data from one page to another page </h1>
</div>
<a href="./process.php?name=aquib&password=shaikh&submit=submit"> click here to send data </a>


<form action="./process.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="max_file_size" value="3000000" />
<input type="file" name="upload" value="" />
<input type="submit" name="submit" value="submit">
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>