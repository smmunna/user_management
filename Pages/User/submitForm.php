<?php
include('connection.php');

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age'])){
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO `user_details`(`name`, `email`, `age`) VALUES ('$name','$email',$age)";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '<script>alert("Data submitted successfully");</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/userForm.php');
    }
    else{
        echo '<script>alert("Something went wrong....")</script>';
        header('refresh:0; url= http://localhost/user_management/Pages/user/userForm.php');
    }
}
else{
    echo '<script>alert("Something went wrong....")</script>';
    header('refresh:0; url= http://localhost/user_management/Pages/user/userForm.php');
}
