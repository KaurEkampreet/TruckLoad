<?php

/**
 * @return bool
 */
function validForm()
{
    global $f3;
    $isValid = true; //flag

    if (!validCompanyName($f3->get('company'))) {
        $isValid = false;
        $f3->set("errors['company']", "Please enter a company name");

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

//    if (!validType($f3->get('driverType'))) {
//        $isValid = false;
//        $f3->set("errors['driverType']", "Please select valid Driver Type ");
//    }
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
    return !empty($description) /*&& ctype_alpha($description)*/;
}

//function validType($driverType)
//{
//    $driverTypeCheck = false;
//    global $f3;
//
//    if (empty($driverType) || in_array($driverType, $f3->get('drivertype'))) {
//        $driverTypeCheck = true;
//    }
//    return $driverTypeCheck;
//}