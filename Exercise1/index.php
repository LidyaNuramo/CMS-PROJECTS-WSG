<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('../header.php');
		$database= new Database();
?>
		<meta http-equiv="refresh" content="10" />
		<div class="row">
            <div class="col-sm-12" style="margin-left:10%;">
                <table class="table table-striped" border="5">
                <thead>
                    <tr class="thead-dark" style="font-size: 20pt;max-width:70%;white-space:nowrap;">
                        <th scope="col">#</th>
                        <th scope="col">Address</th>
                        <th scope="col">Port</th>
						<th scope="col">Status</th>
                        <th scope="col">Number of failed connection attempts</th>
                        <th scope="col">Connection loss time </th>
                        <th scope="col">Total down time</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12pt;color: black;font-weight: bold;background: rgba(192,192,192, 0.7)">
                    <?php
                    $where['id']="";
                    $results=$database->getRows("hosts","*",$where);
                    $rr="";
                    $num=1;
                    foreach($results as $result){?>
                    <tr>
						<?php
						$address = $result['address'];
						$port = $result['port'];
						$attempts = $result['failedattempts'];
						$failedtime = $result['failedtime'];
						$time = '';
						$duration = $result['failedtime'];
						$durationmin = 0;
						$durationsec = 0;
						$fp = @fsockopen($address, $port, $errno, $errstr, 30);
						if ($fp) { $status ='OK'; } 
						else 
						{ 
							$status ='Out-of-order';
							date_default_timezone_set("Europe/Warsaw"); 
							$time = date("h:i:sa");
							$failedtime = $time;
							//$duration = ($errno)*10;
							//$durationmin = intdiv($duration, 60);
							//$durationsec = $duration%60;
							//$duration = '';
						}
						if (!$fp) { $status ="$errstr ($errno)"; }
						?>
						<td><?php echo $num;?></td>
                        <td><?php echo $result['address'];?></td>
						<td><?php echo $result['port'];?></td>
						<td><?php echo $status;?></td>
						<td><?php echo $attempts;?></td>
                        <td><?php echo $failedtime;?></td>
                        <td><?php echo $duration;?></td>
                        <td><form method='POST'><a href='../DB/process.php?action=deleteHost&id=<?php echo $result['id']?>' class='btn btn-danger' style='width:70px;'>Delete</a></form></td>
                    </tr>
                    <?php $num=$num+1;
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
<?php
	include('../footer.php');
?>
