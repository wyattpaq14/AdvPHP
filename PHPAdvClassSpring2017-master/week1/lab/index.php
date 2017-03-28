<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <a href="View.php">View Addresses</a>
        
    </head>
    <body>

        <?php
        include './models/Validate.php';
        include './models/dbconnect.php';
        include './models/util.php';
        include './models/AddressCRUD.php';

        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');

        $states = returnStates();

        $errors = [];
        if (isPostRequest()) {
            if (empty($fullname)) {
                $errors[] = 'Full Name Is Required';
            }
            if (isValidEmail($email) === false) {
                $errors[] = 'Email Is Not Valid';
            }
            if (empty($addressline1)) {
                $errors[] = 'Address Is Required';
            }
            if (empty($city)) {
                $errors[] = 'City Is Required';
            }
            if (!isValidZIP($zip)) {
                $errors[] = 'Zip Is Not Valid';
            }
            if (!isValidDate($birthday)) {
                $errors[] = 'Birthday Is Not Valid';
            }
            if (count($errors) === 0) {

                if (createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday)) {

                    $message = 'Good Job';
                }
            }
        }
        ?>

        <?php include './templates/errors.html.php'; ?>
        <?php include './templates/messages.html.php'; ?>
        <?php include './templates/add-address.html.php'; ?>
    </body>
</html>
