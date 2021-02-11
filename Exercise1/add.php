<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('../header.php');
		$database= new Database();
?>

		<form class="form-group row" action="../DB/process.php?action=addhost" method="POST" onSubmit="return(check_pass())" style="background: rgba(192,192,192, 0.7);padding-top:30px;margin-top: 100px;padding-bottom:60px;height: 100%;width: 90%;margin-left: 5%;">
		  <div class="form-row">
			<label style="font-size: 3vw;color: black;margin-left: 60px;font-weight: bold;" class="control-label">Fill out the form to add a new host for monitoring</label>
			<br>
			<br>
		  </div>

		  <div class="form-row" style="font-size: 14pt;margin-top: 30px;">
			  <label for="name" class="col-sm-2 col-form-label">Web/IP address:</label>
			  <input class="form-control" type="text" placeholder="example.com" name="address">
		  </div>

		  <div class="form-row" style="font-size: 14pt;margin-top: 30px;">
			  <label for="name" class="col-sm-2 col-form-label">Port:</label>
			  <input class="form-control" type="text" placeholder="80" name="port">
		  </div>

		  <div class="form-row">
			<label for="name" class="col-sm-2 col-form-label" style="font-size: 14pt; margin-top: 30px;" required>Assigned to:</lable>
				<select class="form-control" name="assignedto" style="font-size: 14pt; height: 60%; width:700%;">
				  <option selected value=""> </option>
		      		<?php
			    	$database=new Database();
					$where['id']="";
					$results=$database->getRows("users","*",$where);
					$rr="";
					foreach($results as $result){
						$rr=$rr."<option value=".$result['id'].">".$result['firstname']." ".$result['lastname']."</option>";
					}
					echo $rr;
			    ?>
				</select>
		  </div>

		  <div class="form-row">
			<button type="submit" class="btn btn-primary" style="position: right;margin-top: 40px;margin-left: 65%;width: 20%;font-size:1,5vw;font-weight: bold;" id="submit">Register Host</button>
		  </div>
		</form>

<?php
	include('../footer.php');
?>