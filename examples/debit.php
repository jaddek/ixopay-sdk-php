<?php

require_once('../vendor/autoload.php');

$user = '';
$password = '';
$apiToken = '';
$sharedToken = '';

/**
 * Put your own credentials file with variables $user, $password, $apiToken, $sharedToken
 */

require_once('./credentials.php');

/**
 * Credentials could be used in global config for http client
 * OR
 * Credentials could be used specifically for each request because we may have variety of connectors
 */
$userCredentials      = new \Jaddek\Ixopay\Http\UserCredentials($user, $password);
$connectorCredentials = new \Jaddek\Ixopay\Http\ConnectorCredentials($apiToken, $sharedToken);


/**
 * \Jaddek\Ixopay\Http\Endpoint\Transactions::class
 * Or
 * \Jaddek\Ixopay\Http\Endpoint\Schedules::class
 */
$endpoint = \Jaddek\Ixopay\Http\FactorySandbox::buildEndpoint(
    \Jaddek\Ixopay\Http\Endpoint\Transactions::class,
);

$debit = new \Jaddek\Ixopay\Http\Request\Transaction\TransactionDebit(
    merchantTransactionId: time(),
    amount: 10,
    currency: 'EUR'
);

$result = $endpoint->debit(
    $debit,
    $connectorCredentials,
    $userCredentials
);

print_r($result->toArray());
