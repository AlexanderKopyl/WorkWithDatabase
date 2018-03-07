
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
		$emailAR= mysqli_query($db,"SELECT `email` FROM `info`") ;
		$sql1 = mysqli_fetch_all($emailAR);
		
		mysqli_query($db,"INSERT INTO info (fio, tel, email) VALUES (' ". $_POST['fio'] ." ',' ". $_POST['tel'] ." ', '". $_POST['email'] . "')");
		




		
	
 ?> 
 

