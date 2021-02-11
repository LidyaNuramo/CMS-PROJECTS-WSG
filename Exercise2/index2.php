<?php
include '../DB/main.php';
include('../DB/process.php');
include('../header.php');
?>
	<div id="container">
		<div class="btn-group-vertical" style="margin-left: 5px;margin-top: 30px;">
			<a href="index.php"><button type="button" class="btn btn-secondary" style="width:150px;">Index.php</button></a>
			<a href="index1.php"><button type="button" class="btn btn-secondary" style="width:150px;">Index1.php</button></a>
			<a href="#"><button type="button" class="btn btn-secondary" style="width:150px;">Index2.php</button></a>
		</div>
	</div>
	
	<?php
		echo exec ('whoami');
		echo phpinfo ();
	?>
	
	<br>
	<br>
	<br>
	<br>
	<br>
<?php
 include('../footer.php');
?>
