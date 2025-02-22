<?php
//set default values
$name = '';
$email = '';
$phone = '';
$message = 'Enter some data and click on the Submit button.';
$at_symbol = 0;
$dot = 0;

//process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $message = '';
        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        if (empty($name)) {
            $message .= 'You must enter a name' . PHP_EOL;

            // 2. display the name with only the first letter capitalized
        } else {
            $first_name = ucfirst(substr($name, 0,strpos($name,' ')));
        }
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        if (empty($email)) {
            $message .= 'You must enter an email' . PHP_EOL;

            // 2. make sure the email address has at least one @ sign and one dot character
        } else {
            $at_symbol = strpos($email, '@');
            $dot = strpos($email, '.');
            if ($at_symbol == false || $dot == false) {
                $message .= "Please enter a valid email" . PHP_EOL;
            }
        }

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        if (empty($phone)) {
            $message .= 'You must enter a phone number ' . PHP_EOL;

        // 2. format the phone number like this 123-4567 or this 123-456-7890
        } else {
            $just_digits_phone = preg_replace("/[^0-9]/", '', $phone);
            if (strlen($just_digits_phone) == 7) {
                $phone = substr($just_digits_phone,0,3) . '-' . substr($just_digits_phone,3,4);
            } elseif (strlen($just_digits_phone) == 10) {
                $phone = substr($just_digits_phone,0,3) . '-' . substr($just_digits_phone,3,3) . '-' . substr($just_digits_phone,6,4);
            } else {
                $message .= 'Your phone number must have 7 or 10 digits ' . PHP_EOL;
            }
        }
        /*************************************************
         * Display the validation message
         ************************************************/
        // $message = "This page is under construction.\n" .
        //     "Please write the code that processes the data.";

        if ($message == '') {
            $message .= "Hello " . $first_name . "," . PHP_EOL;
            $message .= PHP_EOL;
            $message .= 'Thank you for entering this data:'. PHP_EOL;
            $message .= PHP_EOL;
            $message .= "Name: $name". PHP_EOL;
            $message .= "Email: $email". PHP_EOL;
            $message .= "Phone: $phone". PHP_EOL;
        }

        break;
}
include 'string_tester.php';
?>