<?php

// class declaration here
class Address
{
    protected static $local_country = null;

    public static function setLocalCountry($country)
    {
        static::$local_country = $country;
    }

    public $name = null;
    public $street = null;
    public $house_nr = null;
    public $city = null;
    public $country = null;
    public $postal_code = null;

    public function isLocal()
    {
        // simple:
        return $this->country == static::$local_country;

        // also ok:
        if ($this->country == static::$local_country) {
            return true;
        } else {
            return false;
        }
    }
}


address::setLocalCountry('czechia');

// the value of address::$country is now 'czechia'