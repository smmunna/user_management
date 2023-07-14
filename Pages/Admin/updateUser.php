<?php
session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['id'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $id = $_POST['id'];

    $sql = "UPDATE `user_details` SET `name`='$name',`email`='$email',`age`='$age' WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("User updated successfully");</script>';
        header("refresh:0; URL=http://localhost/user_management/Pages/Admin/AdminHome.php");
    } else {
        echo '<script>alert("Something went wrong...!");</script>';
        header("refresh:0; URL=http://localhost/user_management/Pages/Admin/AdminHome.php");
    }
}
