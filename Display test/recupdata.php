<?php
if($_GET){
	$id = $_GET['id'];
}else{
	$id = $argv[1];
}

//echo $id;
$now = time() *1000;
$then = 1411479030000;
$str_data = file_get_contents("http://www.emoncms.org/feed/data.json?apikey=xxxxxxxxxxxxxxxxxxx&start=".$then."&end=".$now."&id=".$id."&dp=1000");

echo json_encode($str_data);
?>
