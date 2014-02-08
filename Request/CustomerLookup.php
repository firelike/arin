<?php



class AcctByte_Arin_Request_CustomerLookup extends AcctByte_Arin_Request_Abstract
{

    protected $method_name = 'customer';


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
