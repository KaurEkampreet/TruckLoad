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
        $truck = array();
        $driver = array();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //get data from form
            $company = $_POST['company'];
            $companyPhone = $_POST['phoneNumber'];
            $description = $_POST['description'];

            /*//get data from driver
            if (!empty($_POST['driver'])) {
                foreach ($_POST['driver'] as $value) {
                    array_push($driver, $value);
                }
            }*/

            $driver = $_POST['driver'];

           /* //get data from truck
            if (!empty($_POST['truck'])) {
                foreach ($_POST['truck'] as $value) {
                    array_push($truck, $value);
                }
            }*/
            $truck = $_POST['truck'];

            //Add data to hive
            $this->_f3->set('company', $company);
            $this->_f3->set('phoneNumber', $companyPhone);
            $this->_f3->set('description', $description);
            $this->_f3->set('driver', $driver);
            $this->_f3->set('truck', $truck);

            //$partner = new Partner($company, $companyPhone, $description, $driver, $truck);

            //If data is valid
            if (validForm()) {

                //Write data to Session
                $_SESSION['company'] = $_POST['company'];
                $_SESSION['phoneNumber'] = $_POST['phoneNumber'];
                $_SESSION['description'] = $_POST['description'];
                $_SESSION['driver'] = $_POST['driver'];
                $_SESSION['truck'] = $_POST['truck'];

                /*$_SESSION['driver']->setDriver($driver);
                $_SESSION['truck']->setTruck($truck);*/

                //redirect to summary page
                $this->_f3->reroute('/summary');
            }

        }
        $view = new Template();
        echo $view->render('views/partners.html');

    }

    public function detail($partnerId)
    {
        $partner = $GLOBALS['db']->getPartner($partnerId);

        //Add the partner object to the hive, and display the view
        $this->_f3->set('partner', $partner);
        $template = new Template();
        echo $template->render('views/partner-detail.html');
    }

    function summary($db, $partner)
    {
        $db->insertPartner($partner);

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
