<?php

/**
 * @return bool
 */
function validForm()
{
    global $f3;
    $isValid = true; //flag

    if (!validCompanyName($f3->get('companyName'))) {
        $isValid = false;
        $f3->set("errors['companyName']", "Please enter a company name");

        /*alert("Anything!");*/
    }

    if (!validPhoneNumber($f3->get('phoneNumber'))) {
        $isValid = false;
        $f3->set("errors['phoneNumber']", "Please enter valid 10 digit phone number");
    }
    if (!validDescription($f3->get('description'))) {
        $isValid = false;
        $f3->set("errors['description']", "Please tell us description of request:");
    }

    if (!validDriverType($f3->get('driver'))) {
        $isValid = false;
        $f3->set("errors['driver']", "Please select valid Driver Type ");
    }

    if (!validTruckType($f3->get('truck'))) {
        $isValid = false;
        $f3->set("errors['truck']", "Please select valid Truck Type ");
    }
    return $isValid;
}
////validate company name
/**
 * @param $company
 * @return bool
 */
function validCompanyName($company)
{
    return !empty($company) /*&& ctype_alpha($company)*/;
}
//validate phone number
/**
 * @param $phoneNumber
 * @return bool
 */
function validPhoneNumber($phoneNumber)
{
    $phoneResult = false;
    if (strlen($phoneNumber) == 10 && !empty($phoneNumber) && ctype_digit($phoneNumber)) {
        $phoneResult = true;
    }
    return $phoneResult;

}
/**
 * @param $description
 * @return bool
 */
function validDescription($description)
{
    return !empty($description) ;
}

/**
 * @param $drivers
 * @return bool
 */
function validDriverType($drivers)
{
    /*$driverCheck = false;*/
    global $f3;
    if (!empty($drivers)) {
        return true;
    } else {
        return false;
    }
    foreach ($drivers as $driver)
        if (in_array($driver, $f3->get('driverType'))) {
            return true;
        } else {
            return false;
        }

}

/**
 * @param $trucks
 * @return bool
 */
function validTruckType($trucks)
{
    /*$driverCheck = false;*/
    global $f3;
    if (!empty($trucks)) {
        return true;
    } else {
        return false;
    }
    foreach ($trucks as $truck)
        if (in_array($truck, $f3->get('truckType'))) {
            return true;
        } else {
            return false;
        }

}