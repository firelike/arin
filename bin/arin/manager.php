#!/usr/local/bin/php
<?php

include dirname(__FILE__) . '/../bootstrap.php';
require_once dirname(__FILE__) . '/ArinClient.php';

try {
    
    $opts = new Zend_Console_Getopt(array( 
        'help|h|?' => 'help option' , 
        'lookup|l' => 'lookup' , 
        'type|t=s' => 'lookup type - string required' 
    ));
    $opts->parse();
} catch (Zend_Console_Getopt_Exception $e) {
    echo $e->getUsageMessage();
    exit();
}

if ( $opts->getOption('h') ) {
    fwrite(STDOUT, $opts->getUsageMessage());
}

$client = new ArinClient();

try {
    
    if ( $opts->getOption("lookup") && $opts->getOption("type") ) {
        
        switch ( $opts->getOption("type") ) {
            case 'asn':
                $result = $client->asnLookup($opts->getOption("asn"));
            break;
            case 'customer':
                $result = $client->customerLookup($opts->getOption("customer"));
            break;
            case 'ip':
                $result = $client->ipLookup($opts->getOption("ip"));
            break;
            case 'net':
                $result = $client->netLookup($opts->getOption("net"));
            break;
            case 'org':
                $result = $client->orgLookup($opts->getOption("org"));
            break;
            case 'poc':
                $result = $client->pocLookup($opts->getOption("poc"));
            break;
            default:
                throw new InvalidArgumentException('Invalid lookup type');
            break;
        }
        
        Zend_Debug::dump($result);
    }
    
} catch (Exception $e) {
    echo $e->getMessage();
}


// Exit correctly
exit(0);
