<?php



abstract class AcctByte_Arin_Request_Abstract
{

    /**
     *
     * @var string
     */
    private $handle;


    public function __construct ($inArguments)
    {
        if ( isset($inArguments[ 'handle' ]) ) {
            $this->setHandle($inArguments[ 'handle' ]);
        }
    }


    public function getQueryString ()
    {
        return $this->getHandle();
    }


    /**
     *
     * @return the $handle
     */
    public function getHandle ()
    {
        return $this->handle;
    }


    /**
     *
     * @param $handle the
     *            $handle to set
     */
    public function setHandle ($handle)
    {
        $this->handle = $handle;
    }
}
