<?php
require_once 'Person.php';
// What is class and instance

$work = new Person('Victor', 'Morakinyo', 'morakinyovictor1'); //this is an instance
$work -> setAge('30');
$work2 = new Person('Peace', 'Morakinyo', 'peace@gmail.com');
$work2 -> setAge('20');
//$work -> name ='Victor';
//$work -> surname ='Morakinyo';
//$work -> email ='morakinyovictor1@gmail.com';
//$work -> middle ='Ouwafemi';
echo '<pre>';
var_dump ($work);
echo '</pre>';

echo '<pre>';
var_dump ($work2);
echo '</pre>';

//echo $work -> name.'<br>';

echo Person::getCounter();

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter