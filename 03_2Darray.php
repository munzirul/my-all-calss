<?php 

$cars = array ( 
    array('TOYOTA', 'white'),
    array('MARCEDICE','black')

);

echo "<pre>"; 
print_r($cars);
echo "</pre>";

echo $cars[0][1];

echo "<br>";

$cars[0][1]= 'GREEN';
echo $cars[0][1];
?>