<?php

namespace ThinkReaXMLParser\Objects;

use Carbon\Carbon;

abstract class Listing
{
    protected $unique_id;
    protected $type;
    protected $category;
    protected $stype;
    protected $stype_freq;
    protected $listing_office;
    protected $street_num;
    protected $street;
    protected $street2;
    protected $apt;
    protected $title;
    protected $alias;
    protected $hide_address;
    protected $show_map;
    protected $short_description;
    protected $description;
    protected $terms;
    protected $agent_notes;
    protected $subdivision;
    protected $city;
    protected $locstate;
    protected $province;
    protected $postcode;
    protected $region;
    protected $county;
    protected $country;
    protected $latitude;
    protected $longitude;
    protected $kml;
    protected $gbase_address;
    protected $concat_address;
    protected $price;
    protected $price2;
    protected $call_for_price;
    protected $beds;
    protected $baths;
    protected $reception;
    protected $total_units;
    protected $tax;
    protected $income;
    protected $sqft;
    protected $lotsize;
    protected $lot_acres;
    protected $yearbuilt;
    protected $heat;
    protected $cool;
    protected $fuel;
    protected $garage_type;
    protected $garage_size;
    protected $zoning;
    protected $frontage;
    protected $siding;
    protected $roof;
    protected $propview;
    protected $school_district;
    protected $lot_type;
    protected $style;
    protected $hoa;
    protected $reo;
    protected $vtour;
    protected $video;
    protected $featured;
    protected $available;
    protected $created;
    protected $modified;

    /* @var ListingAgent $agent */
    protected $agent;
    /* @var Address $agent */
    protected $address;
    /* @var Media $media */
    protected $media;

    public function __construct(\SimpleXMLElement $xml)
    {
        $this->setUniqueId((string) $xml->uniqueID);
        $this->setTitle((string) $xml->headline);
        $this->setDescription((string) $xml->description);
        $this->setAvailable((string) $xml->dateAvailable);
        $this->setAddress($xml->address);
        $this->setAgent($xml->listingAgent, (string) $xml->agentID);
        $this->setMedia($xml->objects);
        $this->setVideo((string) $xml->videoLink);
        $this->setCategory((string) $xml->category->attributes()->name);
        $this->setPrice((string) $xml->price);
        $this->setCallForPrice((string) $xml->price->attributes()->display);
    }

    /**
     * @return mixed
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * @param mixed $unique_id
     */
    public function setUniqueId($unique_id)
    {
        $this->unique_id = $unique_id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return Listing
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getStype()
    {
        return $this->stype;
    }

    /**
     * @param mixed $stype
     * @return Listing
     */
    public function setStype($stype)
    {
        $this->stype = $stype;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStypeFreq()
    {
        return $this->stype_freq;
    }

    /**
     * @param mixed $stype_freq
     * @return Listing
     */
    public function setStypeFreq($stype_freq)
    {
        $this->stype_freq = $stype_freq;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListingOffice()
    {
        return $this->listing_office;
    }

    /**
     * @param mixed $listing_office
     * @return Listing
     */
    public function setListingOffice($listing_office)
    {
        $this->listing_office = $listing_office;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreetNum()
    {
        return $this->street_num;
    }

    /**
     * @param mixed $street_num
     * @return Listing
     */
    public function setStreetNum($street_num)
    {
        $this->street_num = $street_num;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     * @return Listing
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param mixed $street2
     * @return Listing
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApt()
    {
        return $this->apt;
    }

    /**
     * @param mixed $apt
     * @return Listing
     */
    public function setApt($apt)
    {
        $this->apt = $apt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Listing
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     * @return Listing
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHideAddress()
    {
        return $this->hide_address;
    }

    /**
     * @param mixed $hide_address
     * @return Listing
     */
    public function setHideAddress($hide_address)
    {
        $this->hide_address = $hide_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShowMap()
    {
        return $this->show_map;
    }

    /**
     * @param mixed $show_map
     * @return Listing
     */
    public function setShowMap($show_map)
    {
        $this->show_map = $show_map;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * @param mixed $short_description
     * @return Listing
     */
    public function setShortDescription($short_description)
    {
        $this->short_description = $short_description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Listing
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param mixed $terms
     * @return Listing
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgentNotes()
    {
        return $this->agent_notes;
    }

    /**
     * @param mixed $agent_notes
     * @return Listing
     */
    public function setAgentNotes($agent_notes)
    {
        $this->agent_notes = $agent_notes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }

    /**
     * @param mixed $subdivision
     * @return Listing
     */
    public function setSubdivision($subdivision)
    {
        $this->subdivision = $subdivision;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return Listing
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocstate()
    {
        return $this->locstate;
    }

    /**
     * @param mixed $locstate
     * @return Listing
     */
    public function setLocstate($locstate)
    {
        $this->locstate = $locstate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     * @return Listing
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     * @return Listing
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     * @return Listing
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param mixed $county
     * @return Listing
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     * @return Listing
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @return Listing
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @return Listing
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKml()
    {
        return $this->kml;
    }

    /**
     * @param mixed $kml
     * @return Listing
     */
    public function setKml($kml)
    {
        $this->kml = $kml;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGbaseAddress()
    {
        return $this->gbase_address;
    }

    /**
     * @param mixed $gbase_address
     * @return Listing
     */
    public function setGbaseAddress($gbase_address)
    {
        $this->gbase_address = $gbase_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConcatAddress()
    {
        return $this->concat_address;
    }

    /**
     * @param mixed $concat_address
     * @return Listing
     */
    public function setConcatAddress($concat_address)
    {
        $this->concat_address = $concat_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return Listing
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice2()
    {
        return $this->price2;
    }

    /**
     * @param mixed $price2
     * @return Listing
     */
    public function setPrice2($price2)
    {
        $this->price2 = $price2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallForPrice()
    {
        return $this->call_for_price;
    }

    /**
     * @param mixed $call_for_price
     * @return Listing
     */
    public function setCallForPrice($call_for_price)
    {
        $display = filter_var($call_for_price, FILTER_VALIDATE_BOOLEAN, ['default' => true]);
        $this->call_for_price = $display;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * @param mixed $beds
     * @return Listing
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBaths()
    {
        return $this->baths;
    }

    /**
     * @param mixed $baths
     * @return Listing
     */
    public function setBaths($baths)
    {
        $this->baths = $baths;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReception()
    {
        return $this->reception;
    }

    /**
     * @param mixed $reception
     * @return Listing
     */
    public function setReception($reception)
    {
        $this->reception = $reception;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalUnits()
    {
        return $this->total_units;
    }

    /**
     * @param mixed $total_units
     * @return Listing
     */
    public function setTotalUnits($total_units)
    {
        $this->total_units = $total_units;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param mixed $tax
     * @return Listing
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * @param mixed $income
     * @return Listing
     */
    public function setIncome($income)
    {
        $this->income = $income;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSqft()
    {
        return $this->sqft;
    }

    /**
     * @param mixed $sqft
     * @return Listing
     */
    public function setSqft($sqft)
    {
        $this->sqft = $sqft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLotsize()
    {
        return $this->lotsize;
    }

    /**
     * @param mixed $lotsize
     * @return Listing
     */
    public function setLotsize($lotsize)
    {
        $this->lotsize = $lotsize;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLotAcres()
    {
        return $this->lot_acres;
    }

    /**
     * @param mixed $lot_acres
     * @return Listing
     */
    public function setLotAcres($lot_acres)
    {
        $this->lot_acres = $lot_acres;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearbuilt()
    {
        return $this->yearbuilt;
    }

    /**
     * @param mixed $yearbuilt
     * @return Listing
     */
    public function setYearbuilt($yearbuilt)
    {
        $this->yearbuilt = $yearbuilt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeat()
    {
        return $this->heat;
    }

    /**
     * @param mixed $heat
     * @return Listing
     */
    public function setHeat($heat)
    {
        $this->heat = $heat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCool()
    {
        return $this->cool;
    }

    /**
     * @param mixed $cool
     * @return Listing
     */
    public function setCool($cool)
    {
        $this->cool = $cool;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @param mixed $fuel
     * @return Listing
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGarageType()
    {
        return $this->garage_type;
    }

    /**
     * @param mixed $garage_type
     * @return Listing
     */
    public function setGarageType($garage_type)
    {
        $this->garage_type = $garage_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGarageSize()
    {
        return $this->garage_size;
    }

    /**
     * @param mixed $garage_size
     * @return Listing
     */
    public function setGarageSize($garage_size)
    {
        $this->garage_size = $garage_size;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZoning()
    {
        return $this->zoning;
    }

    /**
     * @param mixed $zoning
     * @return Listing
     */
    public function setZoning($zoning)
    {
        $this->zoning = $zoning;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFrontage()
    {
        return $this->frontage;
    }

    /**
     * @param mixed $frontage
     * @return Listing
     */
    public function setFrontage($frontage)
    {
        $this->frontage = $frontage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSiding()
    {
        return $this->siding;
    }

    /**
     * @param mixed $siding
     * @return Listing
     */
    public function setSiding($siding)
    {
        $this->siding = $siding;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoof()
    {
        return $this->roof;
    }

    /**
     * @param mixed $roof
     * @return Listing
     */
    public function setRoof($roof)
    {
        $this->roof = $roof;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPropview()
    {
        return $this->propview;
    }

    /**
     * @param mixed $propview
     * @return Listing
     */
    public function setPropview($propview)
    {
        $this->propview = $propview;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSchoolDistrict()
    {
        return $this->school_district;
    }

    /**
     * @param mixed $school_district
     * @return Listing
     */
    public function setSchoolDistrict($school_district)
    {
        $this->school_district = $school_district;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLotType()
    {
        return $this->lot_type;
    }

    /**
     * @param mixed $lot_type
     * @return Listing
     */
    public function setLotType($lot_type)
    {
        $this->lot_type = $lot_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param mixed $style
     * @return Listing
     */
    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHoa()
    {
        return $this->hoa;
    }

    /**
     * @param mixed $hoa
     * @return Listing
     */
    public function setHoa($hoa)
    {
        $this->hoa = $hoa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReo()
    {
        return $this->reo;
    }

    /**
     * @param mixed $reo
     * @return Listing
     */
    public function setReo($reo)
    {
        $this->reo = $reo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVtour()
    {
        return $this->vtour;
    }

    /**
     * @param mixed $vtour
     * @return Listing
     */
    public function setVtour($vtour)
    {
        $this->vtour = $vtour;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     * @return Listing
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * @param mixed $featured
     * @return Listing
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $available
     * @return Listing
     */
    public function setAvailable($available)
    {
        $this->available = Carbon::createFromFormat('Y-m-d', $available);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     * @return Listing
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param mixed $modified
     * @return Listing
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return \ThinkReaXMLParser\Objects\ListingAgent
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param \SimpleXMLElement $agent
     * @param string $agent_id
     * @return Listing
     */
    public function setAgent($agent, $agent_id)
    {
        $this->agent = new ListingAgent($agent, $agent_id);
        return $this;
    }

    /**
     * @return \ThinkReaXMLParser\Objects\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \SimpleXMLElement $address
     * @return Listing
     */
    public function setAddress($address)
    {
        $this->address = new Address($address);
        return $this;
    }

    /**
     * @return \ThinkReaXMLParser\Objects\Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param \SimpleXMLElement $objects
     * @return Listing
     */
    public function setMedia($objects)
    {
        $this->media = new Media($objects);
        return $this;
    }
}