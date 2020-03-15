<?php
require_once("config-trucking.php");
class TruckLoadDatabase
{
    //Connection object or PDO object
    private $_dbh;

    function __construct()
    {
        try {
            //Create a new PDO connection
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo "Connected!";

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getPartners()
    {
        //1. Define the query
        $sql = "SELECT * FROM partner
                ORDER BY companyName, companyPhone ASC";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameter

        //4. Execute the statement
        $statement->execute();

        //5. Get the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function getPartner($partnerId)
    {
        //1. Define the query
        $sql = "SELECT * 
                FROM partner, owner
                WHERE partner.partnerId = owner.partnerId
                AND partnerId = :partnerId";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameter
        $statement->bindParam(':partnerId', $partnerId);
        //4. Execute the statement
        $statement->execute();

        //5. Get the result
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function insertPartner($partner)
    {
        //1. Define the query
        $sql = "INSERT INTO partner(companyName, companyPhone, description, driverType, truckType)
                VALUES (:companyName, :companyPhone, :description, :driverType, :truckType)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameter
        $statement->bindParam(':companyName', $partner->getCompanyName());
        $statement->bindParam(':companyPhone', $partner->getCompanyPhone());
        $statement->bindParam(':description', $partner->getDescription());
        $statement->bindParam(':driverType', $partner->getDriverType());
        $statement->bindParam(':truckType', $partner->getTruckType());

        //4. Execute the statement
        $statement->execute();

        //5. Get the result
        $id = $this->_dbh->lastInsertId();
    }


}