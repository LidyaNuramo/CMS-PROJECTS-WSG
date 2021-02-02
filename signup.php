<?php
include('/DB/process.php');
if(!empty($_GET['action']))
{
  switch($_GET['action'])
  {
    case 'no':
      echo '<script language="javascript">';
      echo 'alert("Email account already exists.")';
      echo '</script>';
      break;
  }
}
?>
<!doctype html>

<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="shortcut icon" type="Image/x-icon" href="Image/Logo.ico">
		<title>Lidya Nuramo - CMS Project </title>
	</head>

	<body style="background: url(Image/bg1.jpg) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;"> 
  
		<nav class="nav text-light bg-dark">
		  <a class="nav-link active" aria-current="page" href="index.php">Lidya Nuramo CMS project</a>
		</nav>
		<ul class="nav justify-content-end">
		  <li class="nav-item">
			<form class="form-inline my-2 my-lg-0" action="index.php">
				<label style="font-size: 11pt;color: black;margin-top:25px;color: white;margin-right: 5%;"> Already have an account?<button class="btn btn-outline-primary" type="submit" style="margin-top:2px;margin-left: 10px;">Sign in</button></label>
			</form>
		  </li>
		</ul>

		<form class="form-group row" action="DB/process.php?action=signup" method="POST" onSubmit="return(check_pass())" style="background: rgba(192,192,192, 0.7);padding-top:30px;margin-top: 100px;padding-bottom:60px;height: 100%;width: 90%;margin-left: 5%;">
		  <div class="form-row">
			<label style="font-size: 4vw;color: black;margin-left: 60px;font-weight: bold;" class="control-label">Fill out the form to create an account</label>
			<br>
			<br>
		  </div>

		  <div class="form-row" style="font-size: 14pt;margin-top: 30px;">
			  <label for="name" style="font-size: 14pt;color: black;margin-left: 2%;margin-top: 5px;font-weight: bold;margin-right: 20%;" class="col-sm-2 col-form-labels">First name:
			  <input type="name" class="form-control" id="InputName1" aria-describedby="nameHelp" placeholder="Enter First name" style="height: 40px;width: 170%;margin-left: 2%;" name="firstname" required></label>
			  <label for="Lastname" style="font-size: 14pt;color: black;margin-top: 5px;margin-right: 10%;font-weight: bold;" class="col-sm-2 col-form-labels">Last name:
			  <input type="Lastname" class="form-control" id="InputLastname" aria-describedby="LastnameHelp" placeholder="Enter Last name" style="height: 40px;width: 170%;" name="lastname" required></label>
		  </div>

		  <div class="form-row" style="font-size: 14pt;margin-top: 30px;">
			<label for="" style="font-size: 14pt;color: black;margin-left: 2%;margin-top: 5px;font-weight: bold;margin-right: 20%;" class="col-sm-2 col-form-labels">Email address:
			<input type="email" class="form-control" id="InputEmail1" placeholder="Enter email" style="height: 40px;width: 170%;" name="email" required></label>
			<label for="" style="font-size: 14pt;color: black;margin-right: 10%;margin-top: 5px;font-weight: bold;" class="col-sm-2 col-form-labels">Phone:
			<input class="form-control form-control-sm" type="text" placeholder="+48" style="height: 40px;width: 170%;" name="phone"></label>
		  </div>

		  <div class="form-row" style="font-size: 14pt;margin-top: 30px;">
			<label for="InputPassword1" style="font-size: 14pt;color: black;margin-left: 2%;margin-top: 5px;font-weight: bold;margin-right: 20%;" class="col-sm-2 col-form-labels">Password:
			<input type="password" class="form-control" id="InputPassword1" placeholder="Password" style="height: 40px;width: 170%;" name="password" required></label>
			<label for="InputPassword1" style="font-size: 14pt;color: black;margin-right: 10%;margin-top: 5px;font-weight: bold;" class="col-sm-2 col-form-labels">Confirm password:
			<input type="password" class="form-control" id="InputPassword2" placeholder="Confirm password" style="height: 40px;width: 170%;" required></label>
		  </div>

		  <div class="form-row">
			<button type="submit" class="btn btn-primary" style="position: right;margin-top: 40px;margin-left: 65%;width: 20%;font-size:1,5vw;font-weight: bold;" id="submit">Register account</button>
		  </div>
		</form>
		
		<script>
			function check_pass() {
				var password=document.getElementById('InputPassword1');
				var password2=document.getElementById('InputPassword2');

				if (password.value.length <6 ){
					window.alert("Password length is less than 6.");
					return false;
				}
				else{
					if (password.value == password2.value) {
						return true;
					} else {
						window.alert("Passwords don't match.");
						return false;
					}
				}
				
			}
		</script>
		
		<div class="Footer" id="Footer">
			<p align="right" style="margin-right: 10px;margin-top: 50px;color: white;"> © 2020, Lidya Nuramo </p>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
		<script src="JS/scripts.js" type="text/javascript"></script>
		
	</body>

</html>
