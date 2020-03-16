<?php

class Truck extends Partner
{

    private $_truckId;
    private $_truckType;

    /**
     * Truck constructor.
     * @param $_truckId
     * @param $_truckType
     * @param $companyName
     * @param $companyPhone
     * @param $description
     */
    public function __construct($_truckId, $_truckType, $companyName, $companyPhone, $description)
    {
        parent::__construct($companyName, $companyPhone, $description);
        $this->_truckId = $_truckId;
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
    public function getTruckId()
    {
        return $this->_truckId;
    }

    /**
     * @param mixed $truckId
     */
    public function setTruckId($truckId)
    {
        $this->_truckId = $truckId;
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