<?php
    // get the data from the form
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    $phone = filter_input(INPUT_POST, 'phone');
    
    if (isset($_POST['heard_from'])) {
        $heardfrom = filter_input(INPUT_POST, 'heard_from');
        
    } else {
        $heardfrom = 'Unknown';
    }

    if (isset($_POST['wants_updates'])) {
        $wantsupdates = "Yes";
        
    } else {
        $wantsupdates = "No";
    }

    $contactvia = filter_input(INPUT_POST, 'contact_via');

    $comments = filter_input(INPUT_POST, 'comments');
    $comments = htmlspecialchars($comments);
    $comments = nl2br($comments);
        
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>

        <label>Heard From:</label>
        <span><span><?php echo htmlspecialchars($heardfrom); ?></span><br></span><br>

        <label>Send Updates:</label>
        <span><?php echo $wantsupdates; ?></span><br>

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contactvia); ?></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo $comments; ?></span><br>        
    </main>
</body>
</html>