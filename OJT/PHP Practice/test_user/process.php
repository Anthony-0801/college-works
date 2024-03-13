<?php
error_reporting(E_ALL);
// process.php
// Include connection page
require_once('new-connection.php');
// Add validations here to make sure the information is correct
// If validations pass, we insert the records into the database

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $query = "INSERT INTO test_users (first_name, last_name, email, created_at, updated_at) 
        VALUES ('$first_name', '$last_name', '$email', NOW(), NOW())";
    
    if(run_mysql_query($query)) {
        echo "Successfully added a user!";
        header('Location: success.php');
    } else {
        echo "Failed to add user!";
    }
}




