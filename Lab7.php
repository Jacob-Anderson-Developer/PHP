<?php
/* 
**************Instructions************
using the patient  Table.
Get a list of 6  patients and echo out their
1. pet id
2. customer ID
3. Pet name
4. Pet Type
5. breed
6. temperament

-> Add a new Pet 
-> Change Pet ID 5 temperament to Neurotic and afraid
*/

// Include the database connection
include("dataConnect.php");

// Function to print patient information
function print_patient($patient) {
    echo " Pet ID: " . $patient['pet_id'] . "</br>";
    echo " Customer ID: " . $patient['customer_id'] . "</br>";
    echo " Pet Name: " . $patient['pet_name'] . "</br>";
    echo " Pet Type: " . $patient['pet_type'] . "</br>";
    echo " Breed: " . $patient['breed'] . "</br>";
    echo " Temperament: " . $patient['temperament'] . "</br></br>";
}

// Fetch patient information from the database
$query_info_string = "SELECT * FROM PATIENT
    LEFT JOIN CUSTOMER ON PATIENT.customer_f = CUSTOMER.customer_id
    LIMIT 6";
$q_results = @mysqli_query($dbc, $query_info_string);

$patients = array();

while ($record = @mysqli_fetch_assoc($q_results)) {
    $patients[] = $record;
}

// Print patient information
foreach ($patients as $patient) {
    print_patient($patient);
}

// Update temperament for Pet ID 5
$pet_id_to_update = 5;
$new_temperament = 'Neurotic and Afraid';

$sql = "UPDATE PATIENT SET temperament = '$new_temperament' WHERE pet_id = $pet_id_to_update";

if ($dbc->query($sql)) {
    echo "Record updated successfully <br/>";
} else {
    echo "Error updating record: " . $dbc->error . "<br/>";
}

mysqli_free_result($q_results);
?>
