<?php
// +-|Continent
// +-----------|Country
// +--------------------|Region
// +---------------------------|Province
// +------------------------------------|City
// +------------------------------------------|Street

class Continent
{

    public $nameContinent;

    public function __construct($_continent){
        $this->nameContinent = $_continent;
    }

}

$continent = new Continent("Europa");
class Country extends Continent
{
   public $nameCountry;
   
   public function __construct($_continent, $_country){
    parent::__construct($_continent);
    
    $this->nameCountry = $_country;
}
}
$country = new Country("Europa", "Italia");

class Region extends Country 
{

    public $nameRegion;

    public function __construct($_continent, $_country, $_region){
        parent::__construct($_continent, $_country);
        
        $this->nameRegion = $_region;
    }
}

$region = new Region("Europa", "Italia","Puglia");
class Province extends Region
{
    public $nameProvince;

    public function __construct($_continent, $_country, $_region, $_province){
        parent::__construct($_continent, $_country, $_region);
        
        $this->nameProvince = $_province;
    }

}

$province = new Province("Europa", "Italia","Puglia","Ba");

class City extends Province
{
    public $nameCity;

    public function __construct($_continent, $_country, $_region, $_province, $_city){
        parent::__construct($_continent, $_country, $_region, $_province);
        
        $this->nameCity = $_city;
    }

}
$city = new City("Europa", "Italia","Puglia","Ba","Bari");

class Street extends City
{
    public $nameStreet;

    public function __construct($_continent, $_country, $_region, $_province, $_city, $_street){
        parent::__construct($_continent, $_country, $_region, $_province, $_city);
        
        $this->nameStreet = $_street;
    }

    public function getMyCorrentLocation()
    {
        echo "Mi trovo in ". $this->nameContinent .", " . $this->nameCountry .", " . $this->nameRegion .", " . $this->nameProvince .", " . $this->nameCity .", " . $this->nameStreet;
    }
}

$street = new Street("Europa", "Italia","Puglia","Ba","Bari","Via Tonale, 2D");

$street->getMyCorrentLocation();

echo "\n";


