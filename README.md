## Arin

## Introduction

Zend Framework module with API client to access Arin WHOIS RWS API

## Installation
Install the module using Composer into your application's vendor directory. Add the following line to your
`composer.json`.

```json
{
    "require": {
        "firelike/arin": "^1.*"
    }
}
```
## Configuration

Enable the module in your `application.config.php` file.

```php
return array(
    'modules' => array(
        'Firelike\Arin'
    )
);
```

Copy and paste the `arin.local.php.dist` file to your `config/autoload` folder and customize it with your credentials and
other configuration settings. Make sure to remove `.dist` from your file.Your `arin.local.php` might look something like the following:

```php
<?php
return [
    'arin_service' => [
        'service_url' => 'http://whois.arin.net/rest',
    ]
];
```


## Usage

```php
        use Firelike\Arin\Service\ArinService;
        
        $service = new ArinService();
        
        $params = [ 
            'handle' => 'ARIN' 
        ];
        $records = $service->AsnLookup($params);
        
        var_dump($records);
        
        $params = [
            'handle' => 'NET-93-0-0-0-1' 
        ];
        $records= $service->CustomerLookup($params);

        $params = [
            'handle' => '64.233.160.0' 
        ];
        $records= $service->IpLookup($params);
        
        
        $params = [
            'handle' => 'NET-93-0-0-0-1' 
        ];
        $records= $service->NetLookup($params);
        
        
        $params = [
            'handle' => 'ARIN' 
        ];
        $records= $service->OrgLookup($params);
        
        
        $params = [
            'handle' => 'KOSTE-ARIN' 
        ];
        $records= $service->PocLookup($params);

```

## Implemented Service Methods:

* **asn**
* **customer**
* **ip**
* **net**
* **org**
* **poc**

## Links

* [Zend Framework website](http://framework.zend.com)
* [Arin WHOIS RWS](http://whois.arin.net/ui)