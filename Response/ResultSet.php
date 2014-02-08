<?php
class AcctByte_Arin_Response_ResultSet
{

    /**
     * This required element gives the total number of results found a given search. 
     * If there is an error, then this element will have a value of 0.
     * NOTE: The search system will only return a maximum of 4000 records. 
     * For searches that result in more than 4000 result, the total matches will be set -1, 
     * which will indicate that some records that matched the search were not returned.
     * @var integer
     */
    protected $TotalMatches;

    /**
     * This required element gives the total number of pages for this search result. 
     * The number of pages is defined by the formula Total Matches/Results Per Page. 
     * This is a required element. 
     * If there is an error, then this element will have a value of 0.
     * @var integer
     */
    protected $TotalPages;

    /**
     * This required element gives the current page number. 
     * If there is an error, then this element will have a value of 0.
     * @var unknown_type
     */
    protected $PageNumber;

    /**
     * The Items element will include the following fields of information. See Item. 
     * @var unknown_type
     */
    protected $Items = array();


    public function __construct ($inResult)
    {
        $this->setTotalMatches($inResult->TotalMatches);
        $this->setTotalPages($inResult->TotalPages);
        $this->setPageNumber($inResult->PageNumber);
        $this->setItems($inResult->item);
    }


    public function toArray ()
    {
        
        $out = array( 
            'TotalMatches' => $this->getTotalMatches() , 
            'TotalPages' => $this->getTotalPages() , 
            'PageNumber' => $this->getPageNumber() 
        );
        
        $items = $this->getItems();
        
        $out[ 'Items' ] = array();
        foreach ( $items as $item ) {
            $out[ 'Items' ][] = $item->toArray();
        }
        
        return $out;
    }


    /**
     * @return the $TotalMatches
     */
    public function getTotalMatches ()
    {
        return $this->TotalMatches;
    }


    /**
     * @return the $TotalPages
     */
    public function getTotalPages ()
    {
        return $this->TotalPages;
    }


    /**
     * @return the $PageNumber
     */
    public function getPageNumber ()
    {
        return $this->PageNumber;
    }


    /**
     * @return the $Items
     */
    public function getItems ()
    {
        return $this->Items;
    }


    /**
     * @param $TotalMatches the $TotalMatches to set
     */
    protected function setTotalMatches ($TotalMatches)
    {
        $this->TotalMatches = $TotalMatches;
    }


    /**
     * @param $TotalPages the $TotalPages to set
     */
    protected function setTotalPages ($TotalPages)
    {
        $this->TotalPages = $TotalPages;
    }


    /**
     * @param $PageNumber the $PageNumber to set
     */
    protected function setPageNumber ($PageNumber)
    {
        $this->PageNumber = $PageNumber;
    }


    /**
     * @param $Items the $Items to set
     */
    protected function setItems ($Items)
    {
        foreach ( $Items as $Item ) {
            $this->Items[] = new AcctByte_Arin_Response_Item($Item);
        }
        
    }


}