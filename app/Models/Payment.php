<?php

namespace App\Models;

use App\States\Payment\PaymentState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStates\HasStates;


class Payment extends Model
{
    use HasFactory, HasStates;

    protected $casts = [
        'state' => PaymentState::class,
    ];

}
