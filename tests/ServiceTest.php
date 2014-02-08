<?php


require_once 'AcctByte\Arin\Service.php';

require_once 'PHPUnit\Framework\TestCase.php';



/**
 * AcctByte_Arin_Service test case.
 */
class AcctByte_Arin_ServiceTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var AcctByte_Arin_Service
     */
    private $service;


    /**
     * Prepares the environment before running a test.
     */
    protected function setUp ()
    {
        parent::setUp();
        
        $this->service = new AcctByte_Arin_Service(/* parameters */);
    
    }


    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown ()
    {
        $this->service = null;
        
        parent::tearDown();
    }


    /**
     * Constructs the test case.
     */
    public function __construct ()
    {
        // TODO Auto-generated constructor
    }


    /**
     * Tests AcctByte_Arin_Service->__construct()
     */
    public function test__construct ()
    {
        $this->assertInstanceOf('AcctByte_Arin_Service', $this->service);
            
    }


    /**
     * Tests AcctByte_Arin_Service->AsnLookup()
     */
    public function testAsnLookup ()
    {
        $this->markTestIncomplete("AsnLookup test not implemented");
        
        $this->service->AsnLookup(/* parameters */);
    
    }


    /**
     * Tests AcctByte_Arin_Service->CustomerLookup()
     */
    public function testCustomerLookup ()
    {
        // TODO Auto-generated AcctByte_Arin_ServiceTest->testCustomerLookup()
        $this->markTestIncomplete("CustomerLookup test not implemented");
        
        $this->service->CustomerLookup(/* parameters */);
    
    }


    /**
     * Tests AcctByte_Arin_Service->IpLookup()
     */
    public function testIpLookup ()
    {
        // TODO Auto-generated AcctByte_Arin_ServiceTest->testIpLookup()
        $this->markTestIncomplete("IpLookup test not implemented");
        
        $this->service->IpLookup(/* parameters */);
    
    }


    /**
     * Tests AcctByte_Arin_Service->NetLookup()
     */
    public function testNetLookup ()
    {
        // TODO Auto-generated AcctByte_Arin_ServiceTest->testNetLookup()
        $this->markTestIncomplete("NetLookup test not implemented");
        
        $this->service->NetLookup(/* parameters */);
    
    }


    /**
     * Tests AcctByte_Arin_Service->OrgLookup()
     */
    public function testOrgLookup ()
    {
        // TODO Auto-generated AcctByte_Arin_ServiceTest->testOrgLookup()
        $this->markTestIncomplete("OrgLookup test not implemented");
        
        $this->service->OrgLookup(/* parameters */);
    
    }


    /**
     * Tests AcctByte_Arin_Service->PocLookup()
     */
    public function testPocLookup ()
    {
        // TODO Auto-generated AcctByte_Arin_ServiceTest->testPocLookup()
        $this->markTestIncomplete("PocLookup test not implemented");
        
        $this->service->PocLookup(/* parameters */);
    
    }


    /**
     * Tests AcctByte_Arin_Service->apiCall()
     */
    public function testApiCall ()
    {
        // TODO Auto-generated AcctByte_Arin_ServiceTest->testApiCall()
        $this->markTestIncomplete("apiCall test not implemented");
        
        $this->service->apiCall(/* parameters */);
    
    }

}

