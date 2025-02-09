<?php

require_once('database.php');
$category = filter_input(INPUT_POST, 'newCategory');

if ($category) {
    $query = 'INSERT INTO categories (categoryName)
          VALUES(:category)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category', $category);
    $statement->execute();
    $statement->closeCursor();

    include('category_list.php');
} else {
    echo "Please provide a valid category name.";
}

?>