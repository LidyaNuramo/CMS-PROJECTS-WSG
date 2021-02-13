<?php
	include '../DB/main.php';
	include('../DB/process.php');
	require_once 'phplot.php';
	$where['id']= "";
	$database=new Database();
	$results=$database->getRows("measurements","*",$where,"AND","id DESC");
	$num=1;
	$plot = new PHPlot();
	foreach($results as $result){
		$x1[$num]=$result['x1'];
		$x2[$num]=$result['x2'];
		$x3[$num]=$result['x3'];
		$x4[$num]=$result['x4'];
		$x5[$num]=$result['x5'];
		$datetime[$num]=$result['datetime'];
		$num = $num + 1;
		if ($num == 6){
			break;
		}
	}
	$data = array(
		 array($datetime[5],5,$x5[1],$x5[2],$x5[3],$x5[4],$x5[5]),
		 array($datetime[4],4,$x4[1],$x4[2],$x4[3],$x4[4],$x4[5]),
		 array($datetime[3],3,$x3[1],$x3[2],$x3[3],$x3[4],$x3[5]),
		 array($datetime[2],2,$x2[1],$x2[2],$x2[3],$x2[4],$x2[5]),
		 array($datetime[1],1,$x1[1],$x1[2],$x1[3],$x1[4],$x1[5]),
	);
	$plot->SetDataValues($data);
	$plot->SetDataType('data-data');
	$plot->SetTitle('Generated graph');
	$plot->SetXTitle('Time');
	$plot->SetYTitle('Input Data');
	$plot->SetDrawXGrid(False);
	$plot->SetDrawYGrid(False);
	$plot->DrawGraph();
?>