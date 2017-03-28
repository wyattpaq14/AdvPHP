<?php



function isValidEmail($email){

    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false)
    {
        return true;
    }
        return false;
    
}


function isValidZIP($zip){

    $zipRegex = '/^[0-9]{5}$/';
    if( !preg_match($zipRegex, $zip)){
        
        return false;
    }
    
    return true;
    
}

function isValidDate($birthday){

   /* $dateRegex = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
    if( !preg_match($dateRegex, $birthday)){
        
        return true;
    }
    
    return false;
    */
    return (bool)strtotime($birthday);
}
