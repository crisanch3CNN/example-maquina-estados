<?php

namespace App\States\Payment;

class Paid extends PaymentState
{
    public function color(): string
    {
        return 'green';
    }
}