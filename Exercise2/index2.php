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
	
	<label for="name" class="col-sm-2 col-form-label" style="font-size: 14pt; margin-left: 180px;margin-top: -300px;">PHP: Who am I?:
	<?php
		echo exec ('whoami');
	?>
	</label>
	<br>

	<label for="name" class="col-sm-2 col-form-label" style="font-size: 14pt;margin-left: 180px;" required>Hosting Server Info:</label>
	<br>
	<div class="container" style="margin-left: 180px;">
		<?php
		exec ('TERM=xterm /usr/bin/top n 1 b i',
		$top, $error );
		echo nl2br(implode("\n",$top));
		if ($error){
		exec ('TERM=xterm /usr/bin/top n 1 b
		2>&1', $error );
		echo "Error: ";
		exit ($error[0]);
		}
		?>
	</div>
	<br>

	<label for="name" class="col-sm-2 col-form-label" style="font-size: 14pt;margin-left: 180px;" required>Exerice2 Directory Files Info:</label>
	<br>
	<div class="container" style="margin-left: 180px;">
	<?php
	$output = shell_exec ('ls -al');
	echo "<pre>$output</pre>";
	?>
	</div>
	<br>

	<label for="name" class="col-sm-2 col-form-label" style="font-size: 14pt;margin-left: 180px;" required>DNS Info:</label>
	<br>
	<div class="container" style="margin-left: 180px;">
	<pre>
	<?php
	$result = dns_get_record("lidyanuramo.com");
	print_r($result);
	?>
	</pre>
	<br>

	<?php
	$ip = gethostbyname('lidyanuramo.com');
	echo '<br>Host IP address: '.$ip . '<br>';
	$ip = $_SERVER["REMOTE_ADDR"];
	echo $ip;
	?>
	</div>

	<br>
	<label for="name" class="col-sm-2 col-form-label" style="font-size: 14pt;margin-left: 180px;" required>PHP Info:</label>
	<br>
	<?php
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
