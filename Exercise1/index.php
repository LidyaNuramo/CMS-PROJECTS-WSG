<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('../header.php');
		$database= new Database();
?>
		<meta http-equiv="refresh" content="10" />
		<div class="row">
            <div class="col-sm-12" style="margin-left:1%; margin-top: 70px;">
                <table class="table table-striped" border="5" style="max-width:50%">
				<thead>
					<tr class="thead-dark" style="font-size: 15pt;max-width:50%;white-space:nowrap;">
						<th scope="col" colspan="8"><p class="h1" style="color: white;">Monitored hosts</p></th>
					</tr>
                    <tr class="thead-dark" style="font-size: 15pt;max-width:50%;white-space:nowrap;">
                        <th scope="col">#</th>
                        <th scope="col">Address</th>
                        <th scope="col">Port</th>
						<th scope="col">Status</th>
                        <th scope="col">Reconnection attempts</th>
                        <th scope="col">Connection loss time </th>
                        <th scope="col">Total downtime</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody style="font-size: 11pt;color: black;font-weight: bold;background: rgba(192,192,192, 0.7);max-width:50%">
                    <?php
                    $where['id']="";
                    $results=$database->getRows("hosts","*",$where);
                    $rr="";
                    $num=1;
                    foreach($results as $result){?>
                    <tr>
						<?php
						$id = $result['id'];
						$address = $result['address'];
						$port = $result['port'];
						$attempts = $result['failedattempts'];
						$failedtime = $result['failedtime'];
						$duration = $result['totaldowntime'];
						$durationhr = 0;
						$durationmin = 0;
						$durationsec = 0;
						$fp = @fsockopen($address, $port, $errno, $errstr, 5);
						if ($fp) { 
							$status ='OK'; 
							if ($failedtime != "0"){
								$failedtime = NULL;
							}
						} 
						else 
						{ 
							$status ='Out-of-order';
							$attempts = $attempts + 1;
							$duration = floatval($duration) + 0.25;
							date_default_timezone_set("Europe/Warsaw"); 
							$time = date("Y-m-d h:i:sa");
							if ($failedtime == NULL){
								$failedtime = $time;
							}
							$durationmin = (int)$duration;
							$durationsec = ($duration - floatval($durationmin)) * 60;
							if ($durationmin >= 60){
								$durationhr = intdiv($durationmin, 60);
								$durationmin = $durationmin - ($durationhr * 60);
							}
							$data=array(
								"failedattempts"=>$attempts,
								"failedtime"=>$failedtime,
								"totaldowntime"=>$duration,
							);
							$where['id']= '='.$id;
							$database->updateRows("hosts",$data,$where);
						}
						//if (!$fp) { $status ="$errstr ($errno)"; }
						?>
						<td><?php echo $num;?></td>
                        <td><?php echo $result['address'];?></td>
						<td><?php echo $result['port'];?></td>
						<td><?php echo $status;?></td>
						<td><?php echo $attempts;?></td>
                        <td><?php echo $failedtime;?></td>
                        <td><?php echo $durationhr;?>:<?php echo $durationmin;?>:<?php echo $durationsec;?></td>
                        <td><form method='POST'><a href='../DB/process.php?action=deleteHost&id=<?php echo $result['id']?>' class='btn btn-danger' style='width:70px;'>Delete</a></form></td>
                    </tr>
                    <?php $num=$num+1;
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
		<br>
		<br>
		<br>
		<br>
<?php
	include('../footer.php');
?>
