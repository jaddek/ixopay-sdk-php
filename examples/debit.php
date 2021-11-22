<?php

require_once('../vendor/autoload.php');

$user = '';
$password = '';
$apiToken = '';
$sharedToken = '';

$endpoint = \Jaddek\Ixopay\Http\FactorySandbox::buildEndpoint(
    \Jaddek\Ixopay\Http\Endpoint\Transactions::class,
    $user,
    $password,
    $apiToken,
    $sharedToken
);

$debit = new \Jaddek\Ixopay\Http\Request\Transaction\TransactionDebit(
    merchantTransactionId: time(),
    amount: 10,
    currency: 'EUR'
);

$result = $endpoint->debit($debit);


//$provider = new \Jaddek\Ixopay\Http\Provider\TransactionProvider($endpoint);
//$decorator = new \Jaddek\Ixopay\Http\Provider\TransactionProviderHydrationDecorator($provider);


print_r($result->toArray());
//print_r($provider->debit($debit));
//print_r($decorator->debit($debit));
