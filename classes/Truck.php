<?php

class Truck extends Partner
{
    protected $_truckType;

    /**
     * Truck constructor.
     * @param $_truckType
     * @param $companyName
     * @param $companyPhone
     * @param $description
     */
    public function __construct($_truckType, $companyName, $companyPhone, $description)
    {
        parent::__construct($companyName, $companyPhone, $description);
        $this->_truckType = $_truckType;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->_companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->_companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getCompanyPhone()
    {
        return $this->_companyPhone;
    }

    /**
     * @param mixed $companyPhone
     */
    public function setCompanyPhone($companyPhone)
    {
        $this->_companyPhone = $companyPhone;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getTruckType()
    {
        return $this->_truckType;
    }

    /**
     * @param mixed $truckType
     */
    public function setTruckType($truckType)
    {
        $this->_truckType = $truckType;
    }

}