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

$select_sql = "SELECT id FROM info";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
do
{
printf("<input type='radio' name='user' value='%s'>%s %s<br/><br/>", $row['id'], $row['first_name'],
 $row['last_name']);	
}
while($row = mysql_fetch_array($result))
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