<?php
include('connection.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM `user_info` WHERE `email`='$email' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);
        $mysqlinumrows = mysqli_num_rows($result);

        if ($mysqlinumrows) {
            $_SESSION['email'] = $customer_email;
            $_SESSION['password'] = $customer_password;
            header("Location:http://localhost/user_management/Pages/user/userForm.php");
        } else {
            echo '<script>alert("Invalid Username or Password");</script>';
            header("refresh:0; URL=http://localhost/user_management/index.php");
        }
        // Redirect to a different page after processing the form
        exit();
    } else {
        echo 'No data found here...';
    }
}
