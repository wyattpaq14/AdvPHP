<?php

/**
 * Description of Validation
 *
 * @author 001305794
 */
class Validation {

    function isValidEmail($email) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            return true;
        }
        return false;
    }

    function isValidZIP($zip) {

        $zipRegex = '/^[0-9]{5}$/';
        if (!preg_match($zipRegex, $zip)) {

            return false;
        }

        return true;
    }

    function isValidDate($date) {
    $testDate = $date;
    $test_arr = explode('-', $testDate);
    //make sure checkdate has a non-empty date to check
    if (!$date == "") {
        if (checkdate($test_arr[1], $test_arr[2], $test_arr[0])) {
            return true;
        } else {
            return false;
        }
    }
}
}
