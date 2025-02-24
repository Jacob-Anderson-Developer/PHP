<?php
//set default value
$message = '';

//get value from POST array
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'start_app';
}

//process
switch ($action) {
    case 'start_app':

        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        $default_date->sub($interval);
        $invoice_date_s = $default_date->format('n/j/Y');

        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        $default_date->add($interval);
        $due_date_s = $default_date->format('n/j/Y');

        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        $invoice_date_s = filter_input(INPUT_POST, 'invoice_date');
        $due_date_s = filter_input(INPUT_POST, 'due_date');

        // make sure the user enters both dates
        if (empty($invoice_date_s) || empty($due_date_s)) {
            $message = 'Please enter both dates.';
            break;
        } else {

            // convert date strings to DateTime objects
            // and use a try/catch to make sure the dates are valid
            try {
                $invoice_date_o = new DateTime($invoice_date_s);
                $due_date_o = new DateTime($due_date_s);
            } catch (Exception $e) {
                $message = 'One or both dates are invalid.';
                break;
            }

            // make sure the due date is after the invoice date

            if ($invoice_date_o > $due_date_o) {
                $message = 'Invoice Date cannot come after due date.';
                break;
            } else {

                // format both dates
                $invoice_date_f = $invoice_date_o->format('F j, Y');
                $due_date_f = $due_date_o->format('F j, Y');

                // get the current date and time and format it
                $current_date_o = new DateTime();
                $current_date_f = $current_date_o->format('F j, Y');
                $current_time_f = $current_date_o->format('g:i:s a');

                // get the amount of time between the current date and the due date
                // and format the due date message
                $time_span = $current_date_o->diff($due_date_o);
                if ($due_date_o < $current_date_o) {
                    $due_date_message = $time_span->format("This invoice is %y Years %m Months %d days overdue.");
                } else {
                    $due_date_message = $time_span->format("This invoice is due in %y Years %m Months and %d days.");
                }

                break;
            }
        }
}
include 'date_tester.php';
?>