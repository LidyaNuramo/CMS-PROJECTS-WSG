<?php
session_start();
if(isset($_SESSION['username'])){
?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="Image/x-icon" href="../Image/logo2.ico">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../CSS/index.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="../CSS/bootstrap.min.css">
		<link rel="stylesheet" href="../CSS/all.min.css">
		<link rel="stylesheet" href="../CSS/templatemo-style.css">
		<title>Lidya Nuramo - CMS Project </title>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Lidya Nuramo CMS project</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item">
				<a class="nav-link" href="../Home">Home</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Exercises
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="../Exercise1">Exercise 1</a>
				  <a class="dropdown-item" href="../Exercise2">Exercise 2</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="../Exercise3">Exercise 3</a>
				  <a class="dropdown-item" href="../Exercise4">Exercise 4</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="../Exercise6" target="_blank">Exercise 6</a>
				  <a class="dropdown-item" href="#">Exercise 10</a>
				</div>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Assigned to me
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="../Exercise1/assigned.php">Hosts</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">Other</a>
				</div>
			  </li>
			  <?php
				if ($_SESSION['AccountType'] == "admin")
				{ ?>
				<li class="nav-item">
					<a class="nav-link" href="../phpmyadmin/" target="_blank">Database</a>
				 </li>
				 <li class="nav-item">
					<a class="nav-link" href="#">User accounts</a>
				 </li>
				<?php }
			  ?>
			  <li class="nav-item">
				<a class="nav-link" href="../DB/process.php?action=logout">Logout</a>
			  </li>
			</ul>
		  </div>
		</nav>
		
	</head>
	<body style="background: url(../Image/bg2.png) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;"> 
<?php
}
else{
    header("Location: ../index.php?action=noaccount");
}
?>
