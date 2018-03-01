<?php 

function get_categories() {
	global $link;
	$sql = "SELECT * FROM `Info`";
	// $sql = "SELECT COUNT(*) AS `Строки`, `fio` FROM `info` GROUP BY `fio` ORDER BY `fio`";
	$result = mysqli_query($link, $sql);
	
	$info = mysqli_fetch_all($result, MYSQL_ASSOC);
	// $fio = mysqli_fetch_all();
	return $info;

	
}

$info = get_categories($link);

 ?>
}
