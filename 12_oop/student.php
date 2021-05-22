<?php

require_once "Person.php";

class Student extends Person
{
    public string $studentId;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = null;
        self::$
    }
}