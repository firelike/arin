<?php



class AcctByte_Arin_Response_Item
{


    public function __construct ($inItem)
    {
        $this->setMerchantId($inItem->mid);
    }


    public function toArray ()
    {
        return array( 
            'MerchantId' => $this->getMerchantId() 
        );
    }
}