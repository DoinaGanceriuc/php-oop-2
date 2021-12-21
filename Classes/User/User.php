<?php

class User
{
    public $name;
    public $lastname;
    public $age;
    public $email;
    protected $password;

    public function __construct($name, $lastname, $age, $email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = hash('md5', $password);

    }

}
