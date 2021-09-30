<?php

namespace App\States\Payment;


class Failed extends PaymentState
{
    protected static $name = 'Failed';

    public function color(): string
    {
        return 'red';
    }
}
