<!--
Descrizione:
Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
 -->

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

$user_one = new User('Anna', 'Rossi', 35, 'anna.rossi@example.com');
$user_one->setPassword('csjfsjdfwjufeweoi');

var_dump($user_one);

?>