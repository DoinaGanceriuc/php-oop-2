<?php

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
