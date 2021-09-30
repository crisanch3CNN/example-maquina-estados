<?php

namespace App\States\Payment;

class Paid extends PaymentState
{
    protected static $name = 'Paid';

    public function color(): string
    {
        return 'green';
    }
}