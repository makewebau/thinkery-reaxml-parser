<?php

namespace ThinkReaXMLParser\Objects\Listings;

class ResidentialListing extends Listing
{

    public function import(\SimpleXMLElement $xml)
    {
        // set the property type
        $this->setType('residential');
        $this->setCategory((string) $xml->category->attributes()->name);
    }
}