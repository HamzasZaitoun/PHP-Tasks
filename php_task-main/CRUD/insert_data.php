<?php
require('conn.php');

if(isset($_POST['add_student'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Insert query
    $query = "INSERT INTO `crud`(`user_name`, `user_email`, `user_mobile`, `user_password`) 
              VALUES (:user_name, :user_email, :user_mobile, :user_password)";
    $statement = $dbconnection->prepare($query);
    $data = [
        'user_name' => $fname,
        'user_email' => $email,
        'user_mobile' => $mobile,
        'user_password' => $password
    ];

   

    // Execute the query
    $statement->execute($data);

   
    header('Location: index.php?message=');
    exit();
}
?>
