<?php
// Include connection page
require_once('new-connection.php');
session_start();

// Check if the form was submitted whether it was a registration, login, or password reset form
if(isset($_POST['action']) && $_POST['action'] == 'register'){
    register_user($_POST);
} else if(isset($_POST['action']) && $_POST['action'] == 'login'){
    login_user($_POST);
} else if(isset($_POST['action']) && $_POST['action'] == 'reset_password'){
    reset_password($_POST);
} else {
    session_destroy();
    header('location: index.php');
    die();
}

// Register user function - it validates the input and if it's valid, it inserts the user into the database
function register_user($post) {
    $_SESSION['errors'] = array();

    // Validate first name
    if (empty($post['first_name']) || !ctype_alpha($post['first_name'])) {
        $_SESSION['errors'][] = "First name must contain only letters and must not be empty!";
    } elseif (strlen($post['first_name']) < 2) {
        $_SESSION['errors'][] = "First name must be at least 2 characters long!";
    }

    // Validate last name
    if (empty($post["last_name"]) || !ctype_alpha($post['last_name'])) {
        $_SESSION['errors'][] = "Last name must contain only letters and must not be empty!";
    } elseif (strlen($post['last_name']) < 2) {
        $_SESSION['errors'][] = "Last name must be at least 2 characters long!";
    }

    // Validate contact number (digits only)
    if (empty($post["contact_number"]) || !ctype_digit($post["contact_number"]) || strlen($post["contact_number"]) !== 11) {
        $_SESSION['errors'][] = "Mobile number must be valid, not empty, and contain 11 digits only!";
    }

    // Validate password length
    if (empty($post["password"])) {
        $_SESSION['errors'][] = "Password can't be empty!";
    } elseif (strlen($post["password"]) < 8) {
        $_SESSION['errors'][] = "Password must be at least 8 characters long!";
    }

     // Validate confirm password length
     if (empty($post["confirm_password"])) {
        $_SESSION['errors'][] = "Password confirmation can't be empty!";
    } elseif ($post["confirm_password"] != ($post["password"])) {
        $_SESSION['errors'][] = "Password confirmation must be the same to your password!";
    }

    // Encrypt the password
    $encrypted_password = md5($post["password"]);

    // End of validation
    if (count($_SESSION['errors']) > 0) {
        header('location: register.php');
        die();
    } else {
        $query = "INSERT INTO users (first_name, last_name, contact_number, password, created_at, updated_at) VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['contact_number']}', '{$encrypted_password}', NOW(), NOW())";
        run_mysql_query($query);
        $_SESSION['success_message'] = 'User has been registered!';
        header('location: register.php');
        die();
    }
}

// Login user function - it checks if the user exists in the database and if it does, it logs the user in
function login_user($post) {
    $_SESSION['errors'] = array();

    // Validate contact number (digits only and exactly 11 digits)
    if (empty($post["contact_number"]) || !ctype_digit($post["contact_number"]) || strlen($post["contact_number"]) !== 11) {
        $_SESSION['errors'][] = "Mobile number must be valid and contain exactly 11 digits!";
    }

    // Encrypt the password
    $encrypted_password = md5($post["password"]);

    // Check if user exists in the database
    $query = "SELECT * FROM users WHERE contact_number = '{$post['contact_number']}' AND password = '{$encrypted_password}'";
    $user = fetch_record($query);

    if ($user) {
        // User found, set session variables
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["first_name"] = $user["first_name"];
        $_SESSION["last_name"] = $user["last_name"];
        $_SESSION["logged_in"] = TRUE;
        header("location: success.php");
        die();
    } else {
        $_SESSION['errors'][] = "Can't find a user with those credentials!";
        header("location: index.php");
        die();
    }
}

// Reset password function - it checks if the user exists in the database and if it does, it resets the user's password
function reset_password($post) {
    $_SESSION["errors"] = array();
    
    // Validate contact number (digits only and exactly 11 digits)
    if (empty($post["contact_number"]) || !ctype_digit($post["contact_number"]) || strlen($post["contact_number"]) !== 11) {
        $_SESSION['errors'][] = "Mobile number must be valid and contain exactly 11 digits!";
    }

    $defpass = 'village88';
    $default_password = md5($defpass);

    // Check if user exists in the database
    $query = "SELECT * FROM users WHERE contact_number = '{$post['contact_number']}' AND id = users.id";
    $user = fetch_record($query);

    if ($user) {
        // User found, update the password
        $query = "UPDATE users SET password = '$default_password' WHERE contact_number = '{$user['contact_number']}'";
        run_mysql_query($query);
        $_SESSION['success_message'] = 'User has successfully changed password!';
        header('location: password-reset.php');
        die();
    } else {
        $_SESSION['errors'][] = "Can't find a user with those credentials!";
        header("location: password-reset.php");
        die();
    }
}
