<?php

class Partner
{
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
    private $_companyName;
    private $_companyPhone;
    private $_description;
    private $_driverType;
    private $_truckType;

    /**
     * Partner constructor.
     * @param $_companyName
     * @param $_companyPhone
     * @param $_description
     * @param $_driverType
     * @param $_truckType
     */
    public function __construct($_companyName, $_companyPhone, $_description, $_driverType, $_truckType)
    {
        $this->_companyName = $_companyName;
        $this->_companyPhone = $_companyPhone;
        $this->_description = $_description;
        $this->_driverType = $_driverType;
        $this->_truckType = $_truckType;
    }
}
