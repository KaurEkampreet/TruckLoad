<?php

class Partner
{

    protected $_companyName;
    protected $_companyPhone;
    protected $_description;

    /**
     * Partner constructor.
     * @param $companyName
     * @param $companyPhone
     * @param $description
     *
     */
    public function __construct($companyName, $companyPhone, $description)
    {
        $this->_companyName = $companyName;
        $this->_companyPhone = $companyPhone;
        $this->_description = $description;
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
