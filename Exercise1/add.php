<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('../header.php');
		$database= new Database();
?>

		<form class="form-group row" action="../DB/process.php?action=addhost" method="POST" onSubmit="return(check_pass())" style="background: rgba(192,192,192, 0.7);padding-top:30px;margin-top: 100px;padding-bottom:60px;height: 100%;width: 90%;margin-left: 5%;">
		  <div class="form-row">
			<label style="font-size: 4vw;color: black;margin-left: 60px;font-weight: bold;" class="control-label">Fill out the form to add a new host for monitoring</label>
			<br>
			<br>
		  </div>

		  <div class="form-row" style="font-size: 14pt;margin-top: 30px;">
			  <label for="name" style="font-size: 14pt;color: black;margin-left: 2%;margin-top: 5px;font-weight: bold;margin-right: 20%;" class="col-sm-2 col-form-labels">Web address:
			  <input type="name" class="form-control" id="InputName1" aria-describedby="nameHelp" placeholder="Enter the host ip or web address" style="height: 40px;width: 170%;margin-left: 2%;" name="firstname" required></label>
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
			<button type="submit" class="btn btn-primary" style="position: right;margin-top: 40px;margin-left: 65%;width: 20%;font-size:1,5vw;font-weight: bold;" id="submit">Submit Host</button>
		  </div>
		</form>

<?php
	include('../footer.php');
?>