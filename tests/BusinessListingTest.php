<?php

use ThinkReaXMLParser\Objects\FloorplanObject;
use ThinkReaXMLParser\Objects\ImageObject;
use ThinkReaXMLParser\Objects\Listings\BusinessListing;

class BusinessListingTest extends PHPUnit_Framework_TestCase
{
    protected $xml;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->xml = simplexml_load_file("stubs/businesslisting.xml");
    }
    
    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function testBusinessListingsParser()
    {
        $parsed = new BusinessListing($this->xml);

        $this->assertSame('ABCD1234', $parsed->getUniqueId());
        $this->assertSame('XNWXNW', $parsed->getAgent()->getAgentID());
        $this->assertSame('Mr. John Doe', $parsed->getAgent()->getName());
        $this->assertInstanceOf(BusinessListing::class, $parsed);
        $this->assertInstanceOf(ImageObject::class, $parsed->getMedia()->getImages()[0]);
        $this->assertSame('http://www.realestate.com.au/tmp/imageM.jpg', $parsed->getMedia()->getImages()[0]->getUrl());
        $this->assertCount(2, $parsed->getMedia()->getImages());
        $this->assertInstanceOf(FloorplanObject::class, $parsed->getMedia()->getFloorplans()[0]);
        $this->assertSame('http://www.realestate.com.au/tmp/floorplan1.gif', $parsed->getMedia()->getFloorplans()[0]->getUrl());
        $this->assertCount(2, $parsed->getMedia()->getFloorplans());
        $this->assertSame('current', $parsed->getStatus());
        $this->assertSame('SHOW STOPPER!!!', $parsed->getTitle());
        $this->assertSame('Automotive', $parsed->getCategory());
        $this->assertSame(200000, $parsed->getPrice());
        $this->assertTrue($parsed->getDisplayPrice());
        $this->assertInstanceOf(\Carbon\Carbon::class, $parsed->getAvailable());
    }
}
