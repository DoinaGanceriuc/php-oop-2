<?php

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
