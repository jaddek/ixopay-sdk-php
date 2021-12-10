<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\ConnectorCredentials;
use Jaddek\Ixopay\Http\UserCredentials;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionCapture;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDebit;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDeRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionIncrementalAuthorization;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionPayout;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRefund;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionVoid;
use Symfony\Contracts\HttpClient\ResponseInterface;

interface TransactionInterface
{
    public function debit(
        TransactionDebit     $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials $apiUserCredentials
    ): ResponseInterface;

    public function preauthorize(
        TransactionDebit     $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface;

    public function capture(
        TransactionCapture   $capture,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface;

    public function void(
        TransactionVoid      $void,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface;

    public function register(
        TransactionRegister  $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface;

    public function deregister(
        TransactionDeRegister $deregister,
        ConnectorCredentials  $connectorCredentials,
        UserCredentials       $userCredentials,
    ): ResponseInterface;

    public function refund(
        TransactionRefund    $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface;

    public function payout(
        TransactionPayout    $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface;

    public function incrementalAuthorization(
        TransactionIncrementalAuthorization $transaction,
        ConnectorCredentials                $connectorCredentials,
        UserCredentials                     $userCredentials,
    ): ResponseInterface;
}