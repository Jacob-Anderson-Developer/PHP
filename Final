<?php
include("dataConnect.php"); // include file

// Replace apostrophes with tildes
function replace_apos($string)
{
    return str_replace("'", "`", $string);
}

$query_info_string = "SELECT * FROM hawkeye_customer";  
$q_results = mysqli_query($dbc, $query_info_string);  
while ($record = mysqli_fetch_array($q_results, MYSQLI_BOTH)) 
{   
    $hc_contact = replace_apos($record["hc_contact"]);
    $name_parts = explode(' ', $hc_contact);
    $end = end($name_parts);
    $begin = implode(' ', array_slice($name_parts, 0, -1));
    echo "Final: $end </br>";
    echo "Begin: $begin </br>";

    // Insert data using prepared statement
    $sqlinsert = "INSERT INTO hawkeye_customer
                  SELECT * FROM hc_contact
                  WHERE hc_lname = ?";

    $stmt = mysqli_prepare($dbc, $sqlinsert);
    mysqli_stmt_bind_param($stmt, 's', $end);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

mysqli_free_result($q_results);
?>
