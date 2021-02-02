<?php
    include '/DB/process.php';
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<title>Lidya Nuramo - CMS Project </title>
	</head>
	
	<body>
		<nav class="nav text-light bg-dark">
		  <a class="nav-link active" aria-current="page" href="#">Lidya Nuramo CMS project</a>
		</nav>
		<ul class="nav justify-content-end">
		  <li class="nav-item">
			<a class="nav-link" href="signup.php">Create an account</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="Guest Home">Log in as a Guest</a>
		  </li>
		</ul>
		<?php
			if(!empty($_GET['action']))
			{
				switch($_GET['action'])
				{
				  case 'yes':?>
					<div class="form-group bg-light">
					  <label for="exampleInputEmail1" style="color: green;" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Account successfully created. Please log in.</label>
					  <br>
					</div>
					<?php
					break;
				  case 'no':
				  ?>

					<div class="form-group bg-light">
					  <label for="exampleInputEmail1" style="color: red;" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Incorrect email or password. Please try again.</label>
					  <br>
					</div>
					<?php
					break;
				  case 'noaccount':
				  ?>

					<div class="form-group bg-light">
					  <label for="exampleInputEmail1" style="color: red;" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Please log in first as you are currently not logged in.</label>
					  <br>
					</div>
					<?php
					break;
				}
			}
		?>
	
		<div class="p-3 mb-2 bg-secondary text-white">
			<form class="form-group row" action="DB/process.php?action=login" method="POST" style="background: rgba(192,192,192, 0.7);padding-top:30px;margin-top: 100px;padding-bottom:60px;height: 100%;width: 90%;margin-left: 5%;">
				<div class="form-group">
				  <label for="exampleInputEmail1">Email address</label>
				  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
				</div>
				<div class="form-group">
				  <label for="exampleInputPassword1">Password</label>
				  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	
	</body>
  
  <footer>
		<div class="Footer" id="Footer">
			<p align="right" style="margin-right: 10px;margin-top: 50px;color: white;"> © 2020, Lidya Nuramo </p>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </footer>  
</html>
