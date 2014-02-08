<?php



class AcctByte_Arin_Request_NetLookup extends AcctByte_Arin_Request_Abstract
{

    protected $method_name = 'net';

    private $handle;


    public function __construct ($inRequestArguments)
    {
        if ( isset($inRequestArguments[ 'handle' ]) ) {
            $this->setHandle($inRequestArguments[ 'handle' ]);
        }
    }


    /**
     *
     * @return the $command
     */
    public function getMethodName ()
    {
        return $this->method_name;
    }
}
