<?php
// process.php
// Include connection page
require_once('new-connection.php');

// Add validations to make sure the information is correct
function validatePhoneNumber($phone) {
    return preg_match('/^[0-9]{11}$/', $phone);
}

function sanitizeInput($input) {
    // Sanitize input to prevent SQL injection
    $sanitizedInput = trim($input); // Remove leading/trailing spaces
    $sanitizedInput = stripslashes($sanitizedInput); // Remove backslashes
    $sanitizedInput = htmlspecialchars($sanitizedInput); // Convert special characters to HTML entities
    return $sanitizedInput;
}

// If validations pass, we insert the records into the database

if(isset($_POST['submit'])) {
    $contactNumber = $_POST['mobile_number'];
    if (validatePhoneNumber($contactNumber)) {
        // Sanitize the input
        $mobile_number = sanitizeInput($contactNumber);
    

    $query = "INSERT INTO ticket_entries (mobile_number, created_at) 
        VALUES ('$mobile_number', NOW())";
    
    
    if(run_mysql_query($query)) {
        $message = "Successfully added a user!";
        header('Location: success.php');
    } else {
        echo "Failed to add user!";
        echo "<a href='index.php'>Go back</a>";
    }
}   else {
    echo "Please fill up the contact number correctly! <br>";
    echo "<a href='index.php'>Go back</a>";
}
}




