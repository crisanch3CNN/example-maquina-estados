<?php

namespace App\States\Payment;


class Pending extends PaymentState
{
    public function color(): string
    {
        return 'orange';
    }
}
