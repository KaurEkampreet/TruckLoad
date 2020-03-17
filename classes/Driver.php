<?php

class Driver extends Partner
{
    protected $_driverType;

    /**
     * Driver constructor.
     * @param $driverType
     * @param $companyName
     * @param $companyPhone
     * @param $description
     */
    public function __construct($driverType, $companyName, $companyPhone, $description)
    {
        parent::__construct($companyName, $companyPhone, $description);
        $this->_driverType = $driverType;
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



}
