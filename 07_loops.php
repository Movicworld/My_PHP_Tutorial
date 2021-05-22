<?php
/*
// while
while (true){

}
*/
// Loop with $counter
$counter = 0;
$counter1 = 0;
/*
while ($counter < 10){
    echo $counter.'<br>';
    if ($counter === 10)
    break; 
    $counter++;
}
// do - while
do {
    echo $counter1.'<br>';
    $counter1++;
}
    while ($counter1 < 20);


// for
for ($counter; $counter <10; $counter++) {
    echo $counter.'<br>';
}
// foreach
$fruits = ['baba','mama','omo'];
foreach ($fruits as $i => $family) {
    echo $i.' '.$family.'<br>';
}
*/
// Iterate Over associative array.
$person = [
    'name' => 'Victor',
    'surname' => 'Morakinyo',
    'matric number' => 'CSC/2016/147',
    'department' => 'Computer Science & Engineering'
];
foreach ($person as $key => $value){
    echo $key.':'. $value.'<br>';
}