<?php

namespace app\Http\Controllers;

Class TestController
{
    public function index()
    {
        $payPal = new PagSeguro();
        $payment = new Payment();
        $payment->payingProcess($payPal);
    }
}

interface PaymentInterface
{
    public function pay();
}

Class PayPal implements PaymentInterface
{
    public function pay()
    {
        echo 'PayPal payment';
    }
}

Class PagSeguro implements PaymentInterface
{
    public function pay()
    {
        echo 'PagSeguro payment';
    }
}

Class Payment
{
    function payingProcess(PaymentInterface $payment)
    {
        $payment->pay();
    }
} 
