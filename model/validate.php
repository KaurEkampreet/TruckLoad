<?php

function validForm()
{
    global $f3;
    $isValid = true;//flag

    if (!validCompanyName($f3->get('company'))) {
        $isValid = false;
        $f3->set("errors['company']", "Please enter company name ");
    }

    if (!validPhoneNumber($f3->get('phoneNumber'))) {
        $isValid = false;
        $f3->set("errors['phoneNumber']", "Please enter valid 10 digit phone number");
    }
    if (!validDescription($f3->get('description'))) {
        $isValid = false;
        $f3->set("errors['description']", "Please tell us description of request:");
    }
    return $isValid;
}
////validate company name
function validCompanyName($company)
{
    return !empty($company) && ctype_alpha($company);
}
//validate phone number
function validPhoneNumber($phoneNumber)
{
    $phoneResult = false;
    if (strlen($phoneNumber) == 10 && !empty($phoneNumber) && ctype_digit($phoneNumber)) {
        $phoneResult = true;
    }
    return $phoneResult;
}
function validDescription($description)
{
    return !empty($description) && ctype_alpha($description);
}