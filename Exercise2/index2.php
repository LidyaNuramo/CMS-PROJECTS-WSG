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
	
	<div class="container" style="margin-left: 180px;font-size: 12pt;color: white;">
	<label for="name" class="col-sm-2 col-form-label" style="margin-top: -600px;">PHP: Who am I?:
	<?php
		echo exec ('whoami');
	?>
	</label>
	<br>

	<label for="name" class="col-sm-2 col-form-label">Hosting Server Info:</label>
	<br>
	<pre>
		<?php
		exec ('TERM=xterm /usr/bin/top n 1 b i',
		$top, $error );
		echo nl2br(implode("\n",$top));
		?>
	</pre>	
	<pre>
		<?php
		if ($error){
		exec ('TERM=xterm /usr/bin/top n 1 b
		2>&1', $error );
		echo "Error: ";
		exit ($error[0]);
		}
		?>
	</pre>
	<br>

	<label for="name" class="col-sm-2 col-form-label">Exerice2 Directory Files Info:</label>
	<br>
	<?php
	$output = shell_exec ('ls -al');
	echo "<pre>".$output."</pre>";
	?>
	<br>

	<label for="name" class="col-sm-2 col-form-label">DNS Info:</label>
	<br>
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
	echo 'User device ip address: '.$ip;
	?>
	<br>

	<?php
	$time1 = time ();
	$time2 = date ("r", $time1);
	echo 'Unix time: ' . $time1 . "<br>";
	echo 'Readable format: ' . $time2;
	?>
	<br>

	<label for="name" class="col-sm-2 col-form-label">User IP Location:</label>
	<?php
	$ipaddress = $_SERVER["REMOTE_ADDR"];
	function ip_details($ip) {
	$json = file_get_contents("http://ipinfo.io/{$ip}/geo");
	$details = json_decode ($json);
	return $details;
	}
	$details = ip_details($ipaddress);
	echo $details -> region; echo '<BR />';
	echo $details -> country; echo '<BR />';
	echo $details -> city; echo '<BR />';
	echo $details -> loc; echo '<BR />';
	echo $details -> ip; echo '<BR />';
	?>

	<br>
	<label for="name" class="col-sm-2 col-form-label">PHP Info:</label>
	<br>
	</div>
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
