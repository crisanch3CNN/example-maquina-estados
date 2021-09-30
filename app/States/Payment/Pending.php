<?php

namespace App\States\Payment;


class Pending extends PaymentState
{
    protected static $name = 'Pending';

    public function color(): string
    {
        return 'orange';
    }
}
