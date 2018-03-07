<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php $expression = true; if ($expression) {  ?>
    <strong>Это истина.</strong>
    <?php } else {  ?>
    <strong>Это ложь.</strong>
    <?php }?>
    <?php 

    $Petrov = array("name"=>"Петров П.П.", "age"=>"34", "email"=>"petrov@mail.ru");
    
    echo $Petrov['name'];
     ?>

<?php
// Создаем новый класс Coor:
class Coor {
// данные (свойства):
var $name;

// методы:
 function Getname() {
 echo $this->name;
 }

 function Setname($name) {
 $this->name = $name;
 }

}

// Создаем объект класса Coor:
$object = new Coor;
// Теперь для изменения имени используем метод Setname():
$object->Setname("Nick");
// А для доступа, как и прежде, Getname():
$object->Getname();
// Сценарий выводит 'Nick'
?>
</body>
</html>



 