<?php
// process.php
// Include connection page
require_once('new-connection.php');
session_start();
// Add validations here to make sure the information is correct
// If validations pass, we insert the records into the database

if(isset($_POST['action']) && $_POST['action'] == 'register'){
    register_user($_POST);
} else if(isset($_POST['action']) && $_POST['action'] == 'login'){
    login_user($_POST);
} else {
    session_destroy();
    header('location: index.php');
    die();
}

function register_user($post) {
    $_SESSION['errors'] = array();

    if(empty($post['first_name'])) {
        $_SESSION['errors'][] = "First name can't be blank!";
    }

    if(empty($post["last_name"])) {
        $_SESSION['errors'][] = "Last name can't be blank!";
    }

    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        $_SESSION['errors'][] = "Email is not valid!";
    }
    if(empty($post["email"])) {
        $_SESSION['errors'][] = "Email can't be blank!";
    }
    
    if(empty($post["password"])) {
        $_SESSION['errors'][] = "Password can't be blank!";
    }
    
    if($post["password"] !== $post["confirm_password"]) {
        $_SESSION['errors'][] = "Passwords do not match!";
    }
    //End of Validation
    if(count($_SESSION['errors']) > 0) {
        header('location: register.php');
        die();
    } else {
        $query = "INSERT INTO test_users (first_name, last_name, email, password, created_at, updated_at) VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['email']}', '{$post['password']}', NOW(), NOW())";
        run_mysql_query($query);
        $_SESSION['success_message'] = 'User has been registered!';
        header('location: register.php');
        die();
    }

}

function login_user($post) {
    $query = "SELECT * FROM test_users WHERE email = '{$post['email']}' AND password = '{$post['password']}'";
    $user = fetch_record($query);
    if(count($user) > 0 ) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["first_name"] = $user["first_name"];
        $_SESSION["logged_in"] = TRUE;
        header("location: success.php");
        die();
    } else {
        $_SESSION['errors'][] = "Can't find a user with those credentials!";
        header("location: index.php");
        die();
    }
}
