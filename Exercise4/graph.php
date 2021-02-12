<?php
	include '../DB/main.php';
	include('../DB/process.php');
	require_once 'phplot.php';
	$where['id']= "";
	$database=new Database();
	$results=$database->getRows("measurements","*",$where,"AND","id DESC");
	$num=1;
	$plot = new PHPlot();
	$data = array();
	foreach($results as $result){
		$title = "Line ".$num." at ".$result['datetime'];
		$num = $num + 1;
		$data2 = array($title,1,$result['x1'],$result['x2'],$result['x3'],$result['x4'],$result['x5']);
		array_push($data,$data2);
		if ($num == 6){
			break;
		}
	}
	$plot->SetDataValues($data);
	$plot->SetDataType('data-data');
	$plot->SetTitle('Generated graph');
	$plot->DrawGraph();
?>