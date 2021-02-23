<?php
require 'Employee.php';

$Employee = new Employee('456789','Dang Hoang Son','asdf');
echo 'Employee'.'<br>';
echo 'man_no:'.$Employee->getManNo().'<br>Name : '.$Employee->getName().'<br>Position : '.$Employee->getPosition().'<br><br>';

$Employee = new Employee('123456','Van la Son','qwe');
echo 'Employee'.'<br>';
echo 'man_no:'.$Employee->getManNo().'<br>Name : '.$Employee->getName().'<br>Position : '.$Employee->getPosition().'<br><br>';

$Employee = new Employee('7879456','Lai la Son','asd');
echo 'Employee'.'<br>';
echo 'man_no:'.$Employee->getManNo().'<br>Name : '.$Employee->getName().'<br>Position : '.$Employee->getPosition().'<br><br>';
?>
