<!--
Descrizione:
Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
 -->

<?php

require_once __DIR__ . '/Classes/User/User.php';
require_once __DIR__ . '/Classes/User/UserStatus.php';
require_once __DIR__ . '/Classes/Product.php';
require_once __DIR__ . '/Classes/Payment/Payment.php';
require_once __DIR__ . '/Classes/Payment/CreditCard.php';

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