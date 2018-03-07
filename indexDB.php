<?php 
$db = mysqli_connect('localhost','root','');
		mysqli_select_db($db,'WMI TEst');
		mysqli_query($db,"SET NAMES utf8");
		$all = "SELECT * FROM `Info`";
	$result = mysqli_query($db, $all);
	$info = mysqli_fetch_all($result, MYSQL_ASSOC);
	
// echo " Ф.И.О ". $_POST['fio']. " Телефон ".$_POST['tel']. " Email ".$_POST['email'];	
		// mysqli_query($db,"INSERT INTO info (fio, tel, email) VALUES (' ". $_POST['fio'] ." ',' ". $_POST['tel'] ." ', '". $_POST['email'] . "')");
	
foreach ($info as $key => $val) {
	$ID = $info[$key]['id'];
	
	$get_id = $_POST['id'];
	
	if($get_id  === $ID ){
		$sql = "DELETE FROM `info` WHERE `info`.`id` = \"$ID\"";
		mysqli_query($db,$sql);

	}
}

		

 ?>