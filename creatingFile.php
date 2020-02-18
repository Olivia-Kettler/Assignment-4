<?php
	
//writing to a file	
function writeJSON($file,$data,$mode='w'){
	if(!isset($data)) return;
	if($mode=='a'){
		if(file_exists($file)) $array=readJSON($file);
		if(!is_array($array)) $array=[];
		$array[]=$data;
	}else{
		$array=$data;
	}
	$h=fopen($file,'w+'); //w+ creates file if there isn't one of that name
	fwrite($h,json_encode($array));
	fclose($h);
}
//reading a file
function readJSON($file,$index=null){
	if(!file_exists($file)) return[];
	$h=fopen($file,'r');
	$output=' ';
	while(!feof($h)) $output.=fgets($h);
	fclose($h);
	return json_decode($output,true);
	$output=json_decode($output,true);
	return !isset($index) ? $output : (isset($output[$index]) ? $output[$index] : null);
	
}
//modifying function
function modifyJSON($file,$data,$index){
	if(file_exists($file)) 
		$input=readJSON($file);
		$input[$index]=array_merge($input[$index],$data);
		writeJSON($file,$input,'w');
		echo '<pre>';
		print_r($input[$index]);
}
//deleting element function
function deleteJSON($file,$index){
	if(!file_exists($file)) return false;
	if(!isset($index)){
		unlink($file);
		return true;
	}
	$input=readJSON($file);
	unset($input[$index]);
	writeJSON($file,$input,'w');
}


	?>