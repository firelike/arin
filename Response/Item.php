<?php



class AcctByte_Arin_Response_Item
{

    
    /**
     * Arin ID for Merchant
     *
     * @var unknown_type
     */
    protected $MerchantId;

    /**
     * The name of the Merchant that is selling this product.
     *
     * @var unknown_type
     */
    protected $MerchantName;

    /**
     * The internal Arin ID for the particular product link.
     *
     * @var unknown_type
     */
    protected $LinkID;

    /**
     * The date when the product link is created.
     *
     * @var unknown_type
     */
    protected $CreatedOn;

    /**
     * The Merchant specified SKU number for the product.
     *
     * @var unknown_type
     */
    protected $SKU;

    /**
     * The name of the item.
     *
     * @var unknown_type
     */
    protected $ProductName;

    /**
     * The Primary Category for the product.
     *
     * @var unknown_type
     */
    protected $ProductCategoryPrimary;

    /**
     * The Secondary Category for the product.
     *
     * @var unknown_type
     */
    protected $ProductCategorySecondary;

    /**
     * The retail price of the product.
     * The currency will also be included.
     *
     * @var unknown_type
     */
    protected $RetailPrice;

    /**
     * The UPC Code for the product.
     *
     * @var unknown_type
     */
    protected $UPCCode;

    /**
     * The short description of the product.
     *
     * @var unknown_type
     */
    protected $ProductDescriptionShort;

    /**
     * The long description of the product.
     *
     * @var unknown_type
     */
    protected $ProductDescriptionLong;

    /**
     * The keywords that are attributed to the product.
     * Example: DVD Player~~BluRay~~SONY
     *
     * @var unknown_type
     */
    protected $ProductKeywords;

    /**
     * The link that the user can click to be taken to the Merchants page where
     * they can buy the product listed.
     *
     * @var unknown_type
     */
    protected $ProductBuyLink;

    /**
     * The link that points to an image of the product.
     * This URL will be on the merchants site.
     *
     * @var unknown_type
     */
    protected $ProductImageLink;


    public function __construct ($inItem)
    {
        $this->setMerchantId($inItem->mid);
        $this->setMerchantName($inItem->merchantname);
        $this->setLinkID($inItem->linkid);
        $this->setCreatedOn($inItem->createdon);
        $this->setSKU($inItem->sku);
        $this->setProductName($inItem->productname);
        $this->setProductCategory($inItem->category);
        $this->setRetailPrice($inItem->price);
        $this->setUPCCode($inItem->upccode);
        $this->setProductDescription($inItem->description);
        $this->setProductKeywords($inItem->keywords);
        $this->setProductBuyLink($inItem->linkurl);
        $this->setProductImageLink($inItem->imageurl);
    }


    public function toArray ()
    {
        return array( 
            'MerchantId' => $this->getMerchantId() , 
            'MerchantName' => $this->getMerchantName() , 
            'LinkID' => $this->getLinkID() , 
            'CreatedOn' => $this->getCreatedOn() , 
            'SKU' => $this->getSKU() , 
            'ProductName' => $this->getProductName() , 
            'ProductCategoryPrimary' => $this->getProductCategoryPrimary() , 
            'ProductCategorySecondary' => $this->getProductCategorySecondary() , 
            'RetailPrice' => $this->getRetailPrice() , 
            'UPCCode' => $this->getUPCCode() , 
            'ProductDescriptionShort' => $this->getProductDescriptionShort() , 
            'ProductDescriptionLong' => $this->getProductDescriptionLong() , 
            'ProductKeywords' => $this->getProductKeywords() , 
            'ProductBuyLink' => $this->getProductBuyLink() , 
            'ProductImageLink' => $this->getProductImageLink() 
        );
    }


    /**
     *
     * @return the $MerchantId
     */
    public function getMerchantId ()
    {
        return (string) $this->MerchantId;
    }


    /**
     *
     * @return the $MerchantName
     */
    public function getMerchantName ()
    {
        return (string) $this->MerchantName;
    }


    /**
     *
     * @return the $LinkID
     */
    public function getLinkID ()
    {
        return (string) $this->LinkID;
    }


    /**
     *
     * @return the $CreatedOn
     */
    public function getCreatedOn ()
    {
        return (string) $this->CreatedOn;
    }


    /**
     *
     * @return the $SKU
     */
    public function getSKU ()
    {
        return (string) $this->SKU;
    }


    /**
     *
     * @return the $ProductName
     */
    public function getProductName ()
    {
        return (string) $this->ProductName;
    }


    /**
     *
     * @return the $ProductCategoryPrimary
     */
    public function getProductCategoryPrimary ()
    {
        return (string) $this->ProductCategoryPrimary;
    }


    /**
     *
     * @return the $ProductCategorySecondary
     */
    public function getProductCategorySecondary ()
    {
        return (string) $this->ProductCategorySecondary;
    }


    /**
     *
     * @return the $RetailPrice
     */
    public function getRetailPrice ()
    {
        return (float) $this->RetailPrice;
    }


    /**
     *
     * @return the $UPCCode
     */
    public function getUPCCode ()
    {
        return (string) $this->UPCCode;
    }


    /**
     *
     * @return the $ProductDescriptionShort
     */
    public function getProductDescriptionShort ()
    {
        return (string) $this->ProductDescriptionShort;
    }


    /**
     *
     * @return the $ProductDescriptionLong
     */
    public function getProductDescriptionLong ()
    {
        return (string) $this->ProductDescriptionLong;
    }


    /**
     *
     * @return the $ProductKeywords
     */
    public function getProductKeywords ()
    {
        return (string) $this->ProductKeywords;
    }


    /**
     *
     * @return the $ProductBuyLink
     */
    public function getProductBuyLink ()
    {
        return (string) $this->ProductBuyLink;
    }


    /**
     *
     * @return the $ProductImageLink
     */
    public function getProductImageLink ()
    {
        if ( strlen((string) $this->ProductImageLink) == 0 ) {
            return '/images/books/no_image.gif';
        } else {
            return (string) $this->ProductImageLink;
        }
    }


    /**
     *
     * @param $MerchantId the
     *            $MerchantId to set
     */
    protected function setMerchantId ($MerchantId)
    {
        $this->MerchantId = $MerchantId;
    }


    /**
     *
     * @param $MerchantName the
     *            $MerchantName to set
     */
    protected function setMerchantName ($MerchantName)
    {
        $this->MerchantName = $MerchantName;
    }


    /**
     *
     * @param $LinkID the
     *            $LinkID to set
     */
    protected function setLinkID ($LinkID)
    {
        $this->LinkID = $LinkID;
    }


    /**
     *
     * @param $CreatedOn the
     *            $CreatedOn to set
     */
    protected function setCreatedOn ($CreatedOn)
    {
        $this->CreatedOn = $CreatedOn;
    }


    /**
     *
     * @param $SKU the
     *            $SKU to set
     */
    protected function setSKU ($SKU)
    {
        $this->SKU = $SKU;
    }


    /**
     *
     * @param $ProductName the
     *            $ProductName to set
     */
    protected function setProductName ($ProductName)
    {
        $this->ProductName = $ProductName;
    }


    protected function setProductCategory ($ProductCategory)
    {
        if ( isset($ProductCategory->primary) ) {
            $this->setProductCategoryPrimary($ProductCategory->primary);
        }
        if ( isset($ProductCategory->secondary) ) {
            $this->setProductCategorySecondary($ProductCategory->secondary);
        }
    }


    /**
     *
     * @param $ProductCategoryPrimary the
     *            $ProductCategoryPrimary to set
     */
    protected function setProductCategoryPrimary ($ProductCategoryPrimary)
    {
        $this->ProductCategoryPrimary = $ProductCategoryPrimary;
    }


    /**
     *
     * @param $ProductCategorySecondary the
     *            $ProductCategorySecondary to set
     */
    protected function setProductCategorySecondary ($ProductCategorySecondary)
    {
        $this->ProductCategorySecondary = $ProductCategorySecondary;
    }


    /**
     *
     * @param $RetailPrice the
     *            $RetailPrice to set
     */
    protected function setRetailPrice ($RetailPrice)
    {
        $this->RetailPrice = $RetailPrice;
    }


    /**
     *
     * @param $UPCCode the
     *            $UPCCode to set
     */
    protected function setUPCCode ($UPCCode)
    {
        $this->UPCCode = $UPCCode;
    }


    protected function setProductDescription ($ProductDescription)
    {
        if ( isset($ProductDescription->short) ) {
            $this->setProductDescriptionShort($ProductDescription->short);
        }
        if ( isset($ProductDescription->long) ) {
            $this->setProductDescriptionLong($ProductDescription->long);
        }
    }


    /**
     *
     * @param $ProductDescriptionShort the
     *            $ProductDescriptionShort to set
     */
    protected function setProductDescriptionShort ($ProductDescriptionShort)
    {
        $this->ProductDescriptionShort = $ProductDescriptionShort;
    }


    /**
     *
     * @param $ProductDescriptionLong the
     *            $ProductDescriptionLong to set
     */
    protected function setProductDescriptionLong ($ProductDescriptionLong)
    {
        $this->ProductDescriptionLong = $ProductDescriptionLong;
    }


    /**
     *
     * @param $ProductKeywords the
     *            $ProductKeywords to set
     */
    protected function setProductKeywords ($ProductKeywords)
    {
        $this->ProductKeywords = $ProductKeywords;
    }


    /**
     *
     * @param $ProductBuyLink the
     *            $ProductBuyLink to set
     */
    protected function setProductBuyLink ($ProductBuyLink)
    {
        $this->ProductBuyLink = $ProductBuyLink;
    }


    /**
     *
     * @param $ProductImageLink the
     *            $ProductImageLink to set
     */
    protected function setProductImageLink ($ProductImageLink)
    {
        $this->ProductImageLink = $ProductImageLink;
    }
}