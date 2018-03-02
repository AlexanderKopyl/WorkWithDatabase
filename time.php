<?php 
	$db = mysqli_connect('localhost','root','');
		mysqli_select_db($db,'WMI TEst');
	$sql = "SELECT * FROM `Info`";
	$result = mysqli_query($db, $sql);
	$info = mysqli_fetch_all($result, MYSQL_ASSOC);

	
foreach ($info as $key => $val) {
        ?>
            <ul>
                    <li><?php echo $info[$key]['fio'];?>
                    </li>
                    <li><?php echo $info[$key]['tel'];?></li>
						<li><?php echo $info[$key]['email'];?></li>
                </ul>
 
<?php 
    }



?>

