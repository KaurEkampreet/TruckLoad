<?php

class Partner
{

    private $_companyName;
    private $_companyPhone;
    private $_description;
    private $_driverType;
    private $_truckType;

    /**
     * Partner constructor.
     * @param $companyName
     * @param $companyPhone
     * @param $description
     * @param $driverType
     * @param $truckType
     */
    public function __construct($companyName, $companyPhone, $description, $driverType, $truckType)
    {
        $this->_companyName = $companyName;
        $this->_companyPhone = $companyPhone;
        $this->_description = $description;
        $this->_driverType = $driverType;
        $this->_truckType = $truckType;
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
    public function getDriverType()
    {
        return $this->_driverType;
    }

    /**
     * @param mixed $driverType
     */
    public function setDriverType($driverType)
    {
        $this->_driverType = $driverType;
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
