https://gateway.ixopay.com/documentation/apiv3

# Samples

In ./examples folder.

Credentials:
```php
$user = '';
$password = '';
$apiKey = '';
$sharedSecret = '';
```

# Basic usage
## Credentials
### Api User Credentials
**$user** and **$password** location here:
```
Merchant Configuration
-->Merchants
---->Choose more for merchant
------>Users:

-> fields username and password
```

```php
$userCredentials = new \Jaddek\Ixopay\Http\UserCredentials($user, $password);
```


### Connector Credentials

**$apiToken** and **$sharedSecret** location here:

```
Merchant Configuration
-->Merchants
--->Connectors
---->Edit: 

-> fields ApiKey and SharedSecret
```


```php
$connectorCredentials = \Jaddek\Ixopay\Http\ConnectorCredentials::class($apiKey, $sharedSecret);
```


## Environment

There are two environments: sandbox and production.

**Sandbox** mode available by
```php
\Jaddek\Ixopay\Http\FactorySandbox::class
```

**Production** mode available by 
```php
\Jaddek\Ixopay\Http\Factory::class
```

These factories make an HttpClient related to each environment. Urls are hardcoded.

If you don't want to use factory, just create a HttpClient.

```php
Symfony\Component\HttpClient\HttpClient::createForBaseUri(self::getHost());
```


## Endpoints

- [Scheduling](https://gateway.ixopay.com/documentation/apiv3#schedule-request) 
- [Transactions](https://gateway.ixopay.com/documentation/apiv3#transaction-request)

```php
$endpoint = \Jaddek\Ixopay\Http\FactorySandbox::buildEndpoint(
    \Jaddek\Ixopay\Http\Endpoint\Transactions::class,
); 

new \Jaddek\Ixopay\Http\Endpoint\Transactions($httpClient, $logger);
```

### Methods

Each endpoint has all methods related to API documentation: https://gateway.ixopay.com/documentation/apiv3

All methods work through DTO objects, so the majority of fields and ENUMs are available by suggestions.

```php
// build a DTO
$debit = new \Jaddek\Ixopay\Http\Request\Transaction\TransactionDebit(
    merchantTransactionId: time(),
    amount: 10,
    currency: 'EUR'
);

//Make a call
$result = $endpoint->debit(
    $debit,
    $connectorCredentials,
    $userCredentials
);

// Response
$result->toArray();
```

## Hydrator

You can use Providers that hydrate the whole response to object. 

```php
$provider = new \Jaddek\Ixopay\Http\Provider\TransactionHydrationProvider($endpoint);

$object = $provider->debit(
    $debit,
    $connectorCredentials,
    $userCredentials
);

print_r($object->getErrors());
print_r($object->getRedirectUrl());
```


# Example

```php
$userCredentials      = new \Jaddek\Ixopay\Http\UserCredentials($user, $password);
$connectorCredentials = new \Jaddek\Ixopay\Http\ConnectorCredentials($apiToken, $sharedSecret);

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
```