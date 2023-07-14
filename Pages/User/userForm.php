<?php

session_start();
// $recv = $_REQUEST['email'];
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="bg-black text-danger fixed-top py-3 mb-2" style="color: white;">
        <?php include('userNavbar.php') ?>
    </div>

    <div class="d-flex justify-content-center mt-4 pt-4">
        <form action="http://localhost/user_management/Pages/user/submitForm.php" method="POST">
            <div class="mt-5">
                <h3>Add your Details</h3>
                <hr>
            </div>
            <p class="fs-6 fw-bold " style="color: red;" id="error-message"></p>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Enter your name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter your email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class=" col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="text" name="age" class="form-control" id="inputPassword3" min="15" max="30" placeholder="Enter your age" required>
                </div>
            </div>

            <button type="submit" id="submit" class="btn btn-primary">Submit Form</button>
        </form>
    </div>


    <div class="bg-black py-2 fixed-bottom">
        <?php
        include('userFooter.php');
        ?>
    </div>


    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>