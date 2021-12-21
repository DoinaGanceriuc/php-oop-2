<?php

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
