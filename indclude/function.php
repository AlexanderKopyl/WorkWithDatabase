<?php 

function get_categories() {
	global $link;
	$sql = "SELECT * FROM `Info`";

	$result = mysqli_query($link, $sql);
	
	$info = mysqli_fetch_all($result, MYSQL_ASSOC);
	// $fio = mysqli_fetch_all();
	return $info;

	
}

$info = get_categories($link);







 ?>

