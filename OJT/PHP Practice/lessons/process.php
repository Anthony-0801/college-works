<?php
include_once 'new-connection.php';
if(isset($_POST['submit']))
{   
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     
     $sql = "INSERT INTO users (name,email,mobile)
     VALUES ('$name','$email','$mobile')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
