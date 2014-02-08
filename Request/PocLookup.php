<?php
class AcctByte_Arin_Request_PocLookup
{

    protected $method_name = 'poc';

    private $handle;


    public function __construct ($inRequestArguments)
    {
        if ( isset($inRequestArguments[ 'handle' ]) ) {
            $this->setHandle($inRequestArguments[ 'handle' ]);
        }
    
    }


    /**
     * @return the $command
     */
    public function getMethodName ()
    {
        return $this->method_name;
    }


    public function getQueryString ()
    {
        
        //        $args[ 'identifier' ] = $this->getIdentifier();
        //        $query_str = http_build_query($args);
        //        return $query_str;
        

        return $this->getHandle();
    

    }
    
    
	/**
     * @return the $handle
     */
    public function getHandle ()
    {
        return $this->handle;
    }

	/**
     * @param $handle the $handle to set
     */
    public function setHandle ($handle)
    {
        $this->handle = $handle;
    }




}
