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
		$result['nick'];
		$result['message']; 
		$result['datetime']; 
		$title = "Line ".$num;
		$num = $num + 1;
		$data2 = array( array($title,0,$result['x1']),array('',1,$result['x2']),array('',2,$result['x3']),array('',3,$result['x4']), array('',4,$result['x5']),);
		//array_push($data,$data2);
		$plot->SetDataValues($data2);
		if ($num == 6){
			break;
		}
	}
	//$plot->SetDataValues($data);
	$plot->SetDataType('data-data');
	$plot->SetTitle('Generated graph from Database');
	$plot->DrawGraph();
?>