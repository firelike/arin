<?php

require_once 'AcctByte/Arin/Service.php';



class ArinClient
{

    protected $client;


    public function __construct ()
    {
        $this->client = new AcctByte_Arin_Service();
    }


    function asnLookup ()
    {
        $params = array( 
            'handle' => 'ARIN' 
        );
        $result = $this->client->AsnLookup($params);
    }


    function customerLookup ()
    {
        $params = array( 
            'handle' => 'NET-93-0-0-0-1' 
        );
        $result = $this->client->CustomerLookup($params);
    }


    function ipLookup ($ip)
    {
        if ( empty($ip) ) {
            die('Supply an IP Address for this operation');
        }
        
        $params = array( 
            'handle' => $ip 
        );
        $result = $this->client->IpLookup($params);
    }


    function netLookup ()
    {
        $params = array( 
            'handle' => 'NET-93-0-0-0-1' 
        );
        $result = $this->client->NetLookup($params);
    }


    function orgLookup ()
    {
        $params = array( 
            'handle' => 'ARIN' 
        );
        $result = $this->client->OrgLookup($params);
    }


    function pocLookup ()
    {
        $params = array( 
            'handle' => 'KOSTE-ARIN' 
        );
        $result = $this->client->PocLookup($params);
    }
}