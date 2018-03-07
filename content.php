
<?php 

	
	// sleep(2);
		// echo " Ф.И.О ". $_POST['fio']. " Телефон ".$_POST['tel']. " Email ".$_POST['email'];	
		// 
		
		
// if($email)
// 		"DELETE FROM `info` WHERE `info`.`email` = $email"	
// 		};

 


		$db = mysqli_connect('localhost','root','');
		mysqli_select_db($db,'WMI TEst');
		mysqli_query($db,"SET NAMES utf8");
			$all = "SELECT * FROM `Info`";
		$result = mysqli_query($db, $all);
		// $info = mysqli_fetch_all($result, MYSQL_ASSOC);
		$post = $_POST['email'];
		$op = "SELECT * FROM info WHERE email = \"$post\"";
		$p = mysqli_query($db, $op);
		$z = mysqli_fetch_all($p,MYSQL_ASSOC);
		 
		 if($z){
		 	echo "<h1> Получилось</h1>";

		 }else{
		 	mysqli_query($db,"INSERT INTO info (fio, tel, email) VALUES (' ". $_POST['fio'] ." ',' ". $_POST['tel'] ." ', '". $_POST['email'] . "')");
		 }

		
		// if(){

		// }else{
		// 	mysqli_query($db,"INSERT INTO info (fio, tel, email) VALUES (' ". $_POST['fio'] ." ',' ". $_POST['tel'] ." ', '". $_POST['email'] . "')");
		// }
		
		
		




		
	
 ?> 
 

