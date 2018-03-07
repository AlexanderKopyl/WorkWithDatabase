<!DOCTYPE">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" href="style.css" type="text/css">
<title>Выбор пользователя для удаления.</title>
</head>
<body>
<form action="delete.php" method="post">
<fieldset>
<?php
$db = mysqli_connect('localhost','root','');
		mysqli_select_db($db,'WMI TEst');
		mysqli_query($db,"SET NAMES utf8");
		$emailAR= mysqli_query($db,"SELECT `email` FROM `info`") ;
		$sql1 = mysqli_fetch_all($emailAR);


foreach ($sql1 as $key => $value) {
 	# code...
$email = $sql1[$key][0] ;
	if($_GET['email'] === $email){
		echo "1";
	// $sql = "DELETE FROM `info` WHERE `info`.`email` = \"$email\"";
	// 	mysqli_query($db,$sql);

 	}elseif($_GET['email'] === ""){
		echo "2";
 	}else{
		echo "3";
 	}


};
		
	


?>
</fieldset>
<fieldset>
<input type="submit" value="Удалить">
</fieldset>
</form>
<a href="info_form.html">Добавить пользователя</a><br/><br/>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="select_change.php">Вернуться к выбору записей для редактирования</a><br/><br/>
</body>
</html>