<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('header.php');
		$database= new Database();
		$where['id']="";
		$results=$database->getRows("hosts","*",$where);
		print "<TABLE CELLPADDING=5 BORDER=1>";
		print "<TR><TD>id</TD><TD>Address</TD><TD>Port</TD><TD>Connection Status</TD><TD>Number of Attempts</TD><TD>Time of connection loss</TD><TD>Duration of connection loss (in minutes)</TD></TR>\n";
		foreach($results as $row){
			$id = $row['id'];
			$address = $row['address'];
			$port = $row['port'];
			$time = '';
			$duration = '';
			$durationmin = 0;
			$durationsec = 0;
			{
				$fp = @fsockopen($address, $port, $errno, $errstr, 30);
				if ($fp) { $status ='OK'; } 
				else 
				{ 
					$status ='Out-of-order';
					date_default_timezone_set("Europe/Warsaw"); 
					$time = date("h:i:sa");
					$duration = ($errno)*10;
					$durationmin = intdiv($duration, 60);
					$durationsec = $duration%60;
					$duration = '';
				}
				if (!$fp) { $status ="$errstr ($errno)"; }
			}
			print "<TR><TD>$id</TD><TD>$address</TD><TD>$port</TD><TD>$status</TD><TD>$errno</TD><TD>$time</TD><TD>$durationmin min $durationsec sec </TD></TR>\n";
		}
		print "</TABLE>";
	include('footer.php');
?>
