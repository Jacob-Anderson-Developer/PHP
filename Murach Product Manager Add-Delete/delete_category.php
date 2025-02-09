<?php

require_once('database.php');
$categoryID = filter_input(INPUT_POST, 'categoryID');

if ($categoryID) {
    $query = 'DELETE FROM categories
          WHERE categoryID = :categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $categoryID);
    $statement->execute();
    $statement->closeCursor();

    include('category_list.php');
} else {
    echo "Please provide a valid category name.";
}

?>