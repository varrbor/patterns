<?php

/**
 * SystemA
 */


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

interface iBank
{
    public function OpenTransaction() ;
    public function CloseTransaction();

    public function transferMoney($amount);

}

interface iClient
{
    public function OpenTransaction() ;
    public function CloseTransaction();

    public function transferMoney($amount);
}

class Bank implements iBank
{
    public function OpenTransaction() {

    }

    public function CloseTransaction() {}
    
    public function transferMoney($amount) {}
}

/**
 * SystemB
 */

class Client implements iClient
{
    public function OpenTransaction() {}
    public function CloseTransaction() {}

    public function transferMoney($amount) {}
}

/**
 * SystemC
 */

class Log
{
    public function logTransaction() {}
}

class Facade
{
    public function transfer($amount)
    {
        $Bank = new Bank();
        $Client = new Client();
        $Log = new Log();

        $Bank -> OpenTransaction();
        $Client -> OpenTransaction();
        $Log -> logTransaction('Transaction open');

        $Bank -> transferMoney(-$amount);
        $Log -> logTransaction('Transfer money from bank');

        $Client -> transferMoney($amount);
        $Log -> logTransaction('Transfer money to client');

        $Bank -> CloseTransaction();
        $Client -> CloseTransaction();
        $Log -> logTransaction('Transaction close');
        echo $amount;
    }
}


// Client codet
$Transfer = new Facade();
$Transfer -> transfer(1000);
