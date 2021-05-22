<?php
/*
// Create array
$array1 = [2,3,4,5,6,7,];
$array2 = ["banana","orange",900 l4"plantian"];

// Print the whole array
echo '<pre>';
var_dump ($array1);
var_dump ($array2);
echo '</pre>';

// Get element by index
echo $array1[2].'<br>';

// Set element by index
$array2[3] = 'cucumber';
echo '<pre>';
var_dump ($array2);
echo '</pre>';

// Check if array has element at index 2
echo isset($array1[2]);

// Append element
$array1[] = 'good';
echo '<pre>';
var_dump ($array1);
echo '</pre>';

// Print the length of the array
echo count($array1). '<br>';

// Add element at the end of the array
array_push($array2, 'dog');
echo '<pre>';
var_dump ($array2);
echo '</pre>';

// Remove element from the end of the array
array_pop($array1);
echo '<pre>';
var_dump ($array1);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($array2,'mango');
echo '<pre>';
var_dump ($array2);
echo '</pre>';

// Remove element from the beginning of the array
array_shift($array1);
echo '<pre>';
var_dump ($array1);
echo '</pre>';

// Split the string into an array
$String = "kobodata,bitcion,forex";
echo '<pre>';
var_dump (explode("," , $String));
echo '</pre>';

// Combine array elements into string

echo (implode(',' , $array1).'<br>');

// Check if element exist in the array
echo '<pre>';
var_dump (in_array('banana', $array2));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump (array_search('coconut', $array2));
echo '</pre>';
// Merge two arrays
echo '<pre>';
var_dump (array_merge($array1, $array2));
var_dump ([...$array1, ...$array2]);
echo '</pre>'; 

// Sorting of array (Reverse order also)
sort($array2);
echo '<pre>';
var_dump ($array2);
echo '</pre>';
*/
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Victor',
    'surname' => 'Morakinyo',
    'matric number' => 'CSC/2016/147',
    'department' => 'Computer Science & Engineering'
];
echo '<pre>';
var_dump ($person);
echo '</pre>';

echo '<pre>';
print_r ($person);
echo '</pre>';

// Get element by key
echo $person['surname'].'<br>';

// Set element by key
$person['faculty'] = 'Technology';

echo '<pre>';
print_r ($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
$person['address'] ??= 'unknown';

echo '<pre>';
print_r ($person);
echo '</pre>';

// Check if array has specific key
echo '<pre>';
var_dump (in_array('Technology', $person, $strict = true));
echo '</pre>';

// Print the keys of the array
echo '<pre>';
var_dump (array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
print_r (array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
print_r ($person);
echo '</pre>';


asort($person);
echo '<pre>';
print_r ($person);
echo '</pre>';

// Two dimensional arrays
$person1 = [
    ['name' => 'Victor', 'surname' => 'Morakinyo', 'matric number' => 'CPE/2016/147','department' => 'CPE'],
    ['name' => 'Peace','surname' => 'Morakinyo','matric number' => 'CSC/2016/147','department' => 'CSC'],

];

echo '<pre>';
print_r ($person1);
echo '</pre>';

//end 