<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('../header.php');
		$database= new Database();
?>
		<meta http-equiv="refresh" content="10" />
		<div class="row" style="max-width:75%;">
            <div class="col-sm-12">
                <table class="table table-striped" border="5" style="margin-top: 70px;margin-left: 2%;width:70%;">
				<thead>
					<tr class="thead-dark" style="font-size: 16pt;white-space:nowrap;">
						<th scope="col" colspan="10"><p class="h1" style="color: white;">Monitored hosts</p></th>
					</tr>
                    <tr class="thead-dark" style="font-size: 16pt;white-space:nowrap;">
                        <th scope="col" style="width:10%;">#</th>
                        <th scope="col" style="width:10%;">Address</th>
                        <th scope="col" style="width:10%;">Port</th>
						<th scope="col" style="width:10%;">Status</th>
                        <th scope="col" style="width:10%;">Failed attempts</th>
                        <th scope="col" style="width:10%;">Loss time </th>
                        <th scope="col" style="width:10%;">Total downtime</th>
						<th scope="col" style="width:10%;">Added by</th>
						<th scope="col" style="width:10%;">Assigned to</th>
                        <th scope="col" style="width:10%;">Action</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12pt;color: black;font-weight: bold;background: rgba(192,192,192, 0.7);">
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
							if ($failedtime != NULL){
								$failedtime = NULL;
								$data=array(
									"failedtime"=>$failedtime,
								);
								$where['id']= '='.$id;
								$database->updateRows("hosts",$data,$where);
							}
							$durationmin = (int)$duration;
							$durationsec = ($duration - floatval($durationmin)) * 60;
							if ($durationmin >= 60){
								$durationhr = intdiv($durationmin, 60);
								$durationmin = $durationmin - ($durationhr * 60);
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
						<?php
							$addedby = $result['addedby'];
							$assignedby = $result['assignedto'];
							$where3['id']= '='.$addedby;
							$results3=$database->getRow("users","*",$where3);
							$added = $results3['firstname']." ".$results3['lastname'];
							$where4['id']= '='.$assignedby;
							$results4=$database->getRow("users","*",$where4);
							$assigned = $results4['firstname']." ".$results4['lastname'];
						?>
						<td><?php echo $added;?></td>
						<td><?php echo $assigned;?></td>
                        <td><form method='POST'><a href='../DB/process.php?action=deleteHost&id=<?php echo $result['id']?>' class='btn btn-danger' style='width:70px;'>Delete</a></form></td>
                    </tr>
                    <?php $num=$num+1;
                    }
                    ?>
					<tr>
						<td colspan="2"><form method='POST'><a href='assigned.php' class='btn btn-info' style='width:200px;color: white;'>Hosts assigned to me</a></form></td>
						<td colspan="6"> </td>
						<td colspan="2"><form method='POST'><a href='add.php' class='btn btn-success' style='width:100px;'>Add Host</a></form></td>
					</tr>
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
