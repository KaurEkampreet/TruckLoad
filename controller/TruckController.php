<?php
/**
 * Ekampreet Kaur
 * Date: Februrary 23, 2020
 * Description: controller class
 */
class TruckController
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function partners()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //get data from form
            $companyName = $_POST['companyName'];
            $companyPhone = $_POST['phoneNumber'];
            $description = $_POST['description'];

            $driverType = $_POST['driver'];
            $truckType = $_POST['truck'];

            //Add data to hive
            $this->_f3->set('companyName', $companyName);
            $this->_f3->set('phoneNumber', $companyPhone);
            $this->_f3->set('description', $description);
            $this->_f3->set('driver', $driverType);
            $this->_f3->set('truck', $truckType);

            $partner = new Partner($companyName, $companyPhone, $description, $driverType, $truckType);

            //If data is valid
            if (validForm()) {

                $_SESSION['Partner'] = $partner;

                //redirect to summary page
                $this->_f3->reroute('/summary');
            }

        }
        $view = new Template();
        echo $view->render('views/partners.html');

    }

    function drivers()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //get data from form
            $driverType = $_POST['driver'];

            //Add data to hive
            $this->_f3->set('driver', $driverType);

            $driver = new Driver($driverType);

            //If data is valid
            if (validForm()) {

                $_SESSION['Driver'] = $driver;

                //redirect to summary page
                $this->_f3->reroute('/summary');
            }

        }
        $view = new Template();
        echo $view->render('views/partners.html');
    }

    function trucks()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //get data from form
            $truckType = $_POST['truck'];

            //Add data to hive
            $this->_f3->set('truck', $truckType);;

            $truck = new Driver($truckType);

            //If data is valid
            if (validForm()) {

                $_SESSION['Driver'] = $truck;

                //redirect to summary page
                $this->_f3->reroute('/summary');
            }

        }
        $view = new Template();
        echo $view->render('views/partners.html');
    }

    public function detail($partnerId, $truckId, $driverId)
    {
        $partner = $GLOBALS['db']->getPartner($partnerId);
        $driver = $GLOBALS['db']->getDriver($driverId);
        $truck = $GLOBALS['db']->getTruck($truckId);

        //Add the partner object to the hive, and display the view
        $this->_f3->set('partner', $partner);

        //Add the driver object to the hive, and display the view
        $this->_f3->set('driver', $driver);

        //Add the truck object to the hive, and display the view
        $this->_f3->set('truck', $truck);

        $template = new Template();
        echo $template->render('views/partner-detail.html');
    }

    function summary($db, $partner)
    {
        $db->insertPartner($partner);
        /*$db->insertDriver($driver);
        $db->insertTruck($truck);*/

        //Display summary
        $view = new Template();
        echo $view->render('views/summary.html');
    }

    function admin()
    {
        $partners = $GLOBALS['db']->getPartners();

        $this->_f3->set('partners', $partners);
        $view = new Template();
        echo $view->render('views/partnerList.html');
    }
}
