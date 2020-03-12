<?php
/**
 * Ekampreet Kaur
 * Date: Februrary 23, 2020
 * Description: controller class
 */
class truckcontroller
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
            $company = $_POST['company'];
            $companyPhone = $_POST['phoneNumber'];
            $description = $_POST['description'];
            $driver = $_POST['driver'];
            $truck = $_POST['truck'];

            //Add data to hive
            $this->_f3->set('company', $company);
            $this->_f3->set('phoneNumber', $companyPhone);
            $this->_f3->set('description', $description);
            $this->_f3->set('driver', $driver);
            $this->_f3->set('truck', $truck);
            //If data is valid
            if (validForm()) {

                //Write data to Session
                $_SESSION['company'] = $_POST['company'];
                $_SESSION['phoneNumber'] = $_POST['phoneNumber'];
                $_SESSION['description'] = $_POST['description'];
                $_SESSION['driver'] = $_POST['driver'];
                $_SESSION['truck'] = $_POST['truck'];
                //redirect to summary page
                $this->_f3->reroute('/summary');
            }

        }
        $view = new Template();
        echo $view->render('views/partners.html');

    }

    function summary()
    {
        $view = new Template();
        echo $view->render('views/summary.html');
    }
}
