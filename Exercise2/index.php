<?php
    include '../DB/main.php';
	include('../DB/process.php');
	include('../header.php');
?>
	<br>
	<br>
	<br>
	<div id="container">
		<div class="btn-group-vertical" style="margin-left: 20px;">
			<a href="index.php"><button type="button" class="btn btn-secondary" style="width:100px;margin-left: 30px;">Index.php</button></a>
			<a href="index1.php"><button type="button" class="btn btn-secondary" style="width:100px;margin-left: 30px;">Index1.php</button></a>
			<a href="index2.php"><button type="button" class="btn btn-secondary" style="width:100px;margin-left: 30px;">Index2.php</button></a>
			<!--div class="btn-group" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Dropdown
				</button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
				  <a class="dropdown-item" href="#">Dropdown link</a>
				  <a class="dropdown-item" href="#">Dropdown link</a>
				</div>
			</div-->
		</div>
	</div>
	<div id="container">
		<div class="row" style="max-width:95%;">
            <div class="col-sm-12">
                <table class="table table-striped" border="5" style="margin-top: 70px;margin-left: 2%;">
				<thead>
					<tr class="thead-dark" style="font-size: 16pt;white-space:nowrap;">
						<th scope="col" colspan="4"><p class="h1" style="color: white;">IP Locations</p></th>
					</tr>
                    <tr class="thead-dark" style="font-size: 16pt;white-space:nowrap;">
                        <th scope="col">#</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date/Time</th>
						<th scope="col">Google Map Link</th>
                    </tr>
                </thead>
                <tbody style="font-size: 12pt;color: black;font-weight: bold;background: rgba(192,192,192, 0.7);">
                    <?php
					$database=new Database();
					$ipaddress = $_SERVER["REMOTE_ADDR"];
					$address= $ipaddress;
					date_default_timezone_set("Europe/Warsaw"); 
					$time = date("Y-m-d h:i:sa");
					$gplink= 'https://www.google.pl/maps/place/'.$ipaddress;
					$data=array(
						"ID"=>null,
						"address"=>$address,
						"datetime"=>$time,
						"gmlink"=>$gplink,
					);
					$database->insertRows("polar-1",$data);
                    $where['id']="";
                    $results=$database->getRows("polar-1","*",$where);
                    $rr="";
                    $num=1;
                    foreach($results as $result){?>
                    <tr>
						<?php
						<td><?php echo $num;?></td>
                        <td><?php echo $result['address'];?></td>
						<td><?php echo $result['datetime'];?></td>
						<td><a href="<?php echo $$result['gmlink'];?>" target="_blank"><?php echo $$result['gmlink'];?></a></td>
                    </tr>
                    <?php $num=$num+1;
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>		
<?php
	include('../footer.php');
?>
