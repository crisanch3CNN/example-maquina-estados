<?php

namespace App\States\Payment;


class Failed extends PaymentState
{
    public function color(): string
    {
        return 'red';
    }
}
