<?php



class AcctByte_Arin_Service
{

    protected $baseApiUrl = 'http://whois.arin.net/rest/';

    private $logger;


    public function __construct ()
    {
        $logger = new Zend_Log();
        $writer = new Zend_Log_Writer_Stream('php://stdout');
        $logger->addWriter($writer);
        $this->logger = $logger;
    }


    public function AsnLookup ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        $request = new AcctByte_Arin_Request_AsnLookup($requestArguments);
        $this->logger->debug("Request Query String: " . $request->getQueryString());
        
        return $this->apiCall($request);
    }


    public function CustomerLookup ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        $request = new AcctByte_Arin_Request_CustomerLookup($requestArguments);
        
        $this->logger->debug("Request Query String: " . $request->getQueryString());
        
        return $this->apiCall($request);
    }


    public function IpLookup ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        $request = new AcctByte_Arin_Request_IpLookup($requestArguments);
        
        $this->logger->debug("Request Query String: " . $request->getQueryString());
        
        return $this->apiCall($request);
    }


    public function NetLookup ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        $request = new AcctByte_Arin_Request_NetLookup($requestArguments);
        
        $this->logger->debug("Request Query String: " . $request->getQueryString());
        
        return $this->apiCall($request);
    }


    public function OrgLookup ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        $request = new AcctByte_Arin_Request_OrgLookup($requestArguments);
        
        $this->logger->debug("Request Query String: " . $request->getQueryString());
        
        return $this->apiCall($request);
    }


    public function PocLookup ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        $request = new AcctByte_Arin_Request_PocLookup($requestArguments);
        
        $this->logger->debug("Request Query String: " . $request->getQueryString());
        
        return $this->apiCall($request);
    }


    public function apiCall ($request)
    {
        $ch = curl_init();

        $url = $this->baseApiUrl . $request->getMethodName() . '/' . $request->getQueryString();
        
        $this->logger->debug("Url " . $url);
        
        $response_body = $this->_post($url, $request->getQueryString());
        
        $this->logger->debug("Response Body " . $response_body);
        
        $parsed_response = $this->_parse($response_body);
        
        if ( isset($parsed_response->Errors) ) {
            $errObject = new AcctByte_Arin_Response_Error($parsed_response->Errors->ErrorID, $parsed_response->Errors->ErrorText);
            return $errObject->toArray();
        }
        
        $responseResult = new AcctByte_Arin_Response_ResultSet($parsed_response);
        return $responseResult->toArray();
    }


    /**
     * Prepare arguments for request
     *
     * @param array $arguments
     *            User supplied arguments
     * @param array $defaultArguments
     *            Default arguments
     * @return array
     */
    protected function _prepareArguments (array $arguments, array $defaultArguments)
    {
        $arguments = array_merge($defaultArguments, $arguments);
        return $arguments;
    }


    private function _post ($url, $post_data)
    {
        // echo $url;
        $this->_resetPostData();
        
        $curl = curl_init();
        
        // curl_setopt($curl, CURLOPT_POST, true);
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_WRITEFUNCTION, array( 
            &$this , 
            "_writeResponseData" 
        ));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        
        curl_exec($curl);
        
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
        if ( ! $code ) {
            throw new Exception(sprintf("Error performing HTTP request: %s", curl_error($curl)));
        }
        
        $response_body = $this->response_data;
        $this->_resetPostData();
        curl_close($curl);
        
        return $response_body;
    }


    private function _resetPostData ()
    {
        $this->response_data = "";
    }


    private function _writeResponseData ($curl_handle, $raw)
    {
        $this->response_data .= $raw;
        return strlen($raw);
    }


    private function _parse ($raw)
    {
        return simplexml_load_string($raw);
    }
}