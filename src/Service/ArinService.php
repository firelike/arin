<?php
namespace Firelike\Arin\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

class ArinService
{
    /**
     * @var string
     */
    protected $serviceUrl;


    public function AsnLookup($inArguments)
    {
        $httpResponse = $this->apiCall('/asn', $inArguments);
        $xmlRecordTag = 'asn';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    public function CustomerLookup($inArguments)
    {
        $httpResponse = $this->apiCall('/customer', $inArguments);
        $xmlRecordTag = 'customer';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    public function IpLookup($inArguments)
    {
        $httpResponse = $this->apiCall('/ip', $inArguments);
        $xmlRecordTag = 'ip';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    public function NetLookup($inArguments)
    {
        $httpResponse = $this->apiCall('/net', $inArguments);
        $xmlRecordTag = 'net';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    public function OrgLookup($inArguments)
    {
        $httpResponse = $this->apiCall('/org', $inArguments);
        $xmlRecordTag = 'org';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    public function PocLookup($inArguments)
    {
        $httpResponse = $this->apiCall('/poc', $inArguments);
        $xmlRecordTag = 'poc';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    public function apiCall($path, $query)
    {
        try {
            $client = new Client([
                'base_uri' => $this->getServiceUrl()
            ]);
            return $client->request('GET', $path, array(
                    'query' => $query
                )
            );
        } catch (RequestException $zhce) {
            $message = 'Error in request to Web service: ' . $zhce->getMessage();
            throw new \Exception($message, $zhce->getCode());
        } catch (ClientException $zhce) {
            $message = 'Error in request to Web service: ' . $zhce->getMessage();
            throw new \Exception($message, $zhce->getCode());
        }
    }


    protected function responseToRecords(Response $httpResponse, $xmlRecordTag)
    {
        // parse response body
        $xml = simplexml_load_string($httpResponse->getBody()->getContents());
        $records = array();
        if ($xml instanceof \SimpleXMLElement) {
            // convert xml to an array
            $arr = @json_decode(@json_encode($xml), true);
            if (isset($arr[$xmlRecordTag])) {
                $records = $arr[$xmlRecordTag];
            }
            // normalize the result array if we have a single result
            if (is_array($records) && !array_key_exists(0, $records)) {
                $records = array(
                    $records
                );
            }
        }
        return $records;
    }

    /**
     * @return string
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    /**
     * @param string $serviceUrl
     */
    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
    }


}