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

class UserStatus extends User
{

    protected $status;
    public $discount = 0;

    public function setSconto($status)
    {

        $this->status = $status;

        if ($status === 'premium') {
            $this->discount = 10;
        } else if ($status === 'new') {
            $this->discount = 5;
        }

    }

}

class Product
{
    public $name;
    public $description;
    public $price;
    public $type;
    public $color;
    public $image_product;
    public $avaiable;

    public function __construct(string $name, string $description, float $price, string $type, string $color, string $image_product, bool $avaiable = true)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->type = $type;
        $this->color = $color;
        $this->image_product = $image_product;
        $this->avaiable = $avaiable;

    }

    public function getName()
    {
        return $this->name;
    }

}

class Payment
{
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getPayment()
    {
        return 'Il metodo di pagamento scelto e`: ' . $this->type;
    }

}

class CreditCard extends Payment
{
    private $number;
    private $security_code;
    private $expiration_month;
    private $expiration_year;

    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function setSecurityCode($security_code)
    {
        $this->security_code = $security_code;
    }
    public function setExpirationMonth($expiration_month)
    {
        $this->expiration_month = $expiration_month;
    }
    public function setExpirationYear($expiration_year)
    {
        $this->expiration_year = $expiration_year;
    }

}

$user_one = new User('Anna', 'Rossi', 35, 'anna.rossi@example.com');
$user_one->setPassword('csjfsjdfwjufeweoi');

$user_status_one = new UserStatus('Maria', 'Bianchi', 23, 'maria.bianchi@example.com');
$user_status_one->setPassword('oareiuheogbfjebgshbaej');
$user_status_one->setSconto('new');

var_dump($user_one, $user_status_one);

$pajamas = new Product('Pigiama Love Patch', 'Pigiama lungo con maglia girocollo in interlock di cotone con polsini e patch centrale tartan impreziosito da un ricamo dorato. Pantalone in tela di cotone garzata a fantasia tartan.', 39.90, 'nightwear', 'Grigio', 'https: //www.intimissimi.com/dw/image/v2/BHHR_PRD/on/demandware.static/-/Sites-INT_EC_COM/default/dw00d269de/images/PLD879031-F.jpg?sw=1000&sfrm=jpeg');

var_dump($pajamas);
var_dump($pajamas->getName());

$payment_first_type = new Payment('credit card');
var_dump($payment_first_type);

$first_credit_card = new CreditCard('credit');
$first_credit_card->setSecurityCode('000');
var_dump($first_credit_card);

?>