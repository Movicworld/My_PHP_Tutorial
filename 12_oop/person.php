<?php

class Person{
    public string $name;
    public string $surname;
    public string $email;
    private ?int $age;
    public static int $counter =0;

    public function __construct($name, $surname, $email)
{
    echo $name.' <br>'.$surname.'<br>'.$email,'<br>';
    self::$counter++;
}

public function setAge($age)
{
    $this ->age = $age;
}

public function getAge()
{
    return $this->age;
}
public static function getCounter()
{
    return self::$counter;
}
}