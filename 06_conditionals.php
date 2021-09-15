<?php

$age = 20;
$age1 = 25;
$age2 = 0;
$salary = 300000;

// Sample if
if ($age === '20');{
echo 'Correct'.'<br>';
}

// Without circle braces
if ($age == 20) 
echo 'Correct'.'<br>';

// Sample if-else
if ($age > 20) {
    echo "correct";
}
else{
    echo "Wrong";
}



// Difference between == and ===
if ($age == 20) {
    echo '1'.'<br>';
}
if ($age == '20') {
    echo '2'.'<br>';
}
if ($age === 20) {
    echo '21'.'<br>';
}


// if AND
if ($age = 20 && $salary === 300000) {
    echo "do something".'<br>';
}
// if OR
if ($age > 20 || $salary === 300000) {
    echo "do something".'<br>';
}

// Ternary if
echo $age1 < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age1 ?: 19;
echo '<pre>';
var_dump ($myAge);
echo '</pre>';

$myAge = $age2 ?: 27;
echo '<pre>';
var_dump ($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? 'name' : 'Ope';
echo '<pre>';
var_dump ($myName);
echo '</pre>';

$myName = $name ?? 'Ope';
echo '<pre>';
var_dump ($myName);
echo '</pre>';

// switch for admin, editor and user
$Role = 'editor';
switch ($Role) {
    case 'admin':
        echo 'Enter your admin login details';
        break;
    case 'editor':
        echo 'Enter your editorial login details';
        break;
    case 'user':
        echo 'Welcome to our world';
        break;
    default:
        echo 'Invalid role';
}
