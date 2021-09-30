Maquina de estado

Verifica si puede cambiar a estado Paid
---------------------------------------
$payment = Payment::find(4);
echo $payment->state->color();
$payment->state->canTransitionTo(Paid::class);

Asigna un estado a una clase
--------------------------
$state_class = App\States\Payment\PaymentState::make('Paid', $payment);

Genera la transisión al nuevo estado
------------------------------------
$payment->state->transitionTo($state_class);
Maquina de estado

Verifica si puede cambiar a estado Paid
---------------------------------------
$payment = Payment::find(4);
echo $payment->state->color();
$payment->state->canTransitionTo(Paid::class);

Asigna un estado a una clase
--------------------------
$state_class = App\States\Payment\PaymentState::make('Paid', $payment);

Genera la transisión al nuevo estado
------------------------------------
$payment->state->transitionTo($state_class);
