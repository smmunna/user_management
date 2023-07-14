<?php
session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
$recv = $_REQUEST['id'];
$sql = "SELECT `name`, `email`, `age`, `id` FROM `user_details` WHERE `id`=$recv";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View user</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>

        <div class="mb-2 bg-black py-3 fixed-top">
            <?php
            include('adminNavbar.php');
            ?>
        </div>
        <div class="mt-5 pt-5">
            <h3 style="text-align: center; font-weight: bold;">User details</h3>
            <hr>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Name: <?php echo $row['name'] ?></p>
                    <p class="card-text">Email: <?php echo $row['email'] ?></p>
                    <p class="card-text">Age: <?php echo $row['age'] ?> years</p>
                </div>
            </div>
        </div>

    <?php
}
    ?>

    <div class="bg-black py-2 fixed-bottom">
        <?php
        include('adminFooter.php');
        ?>
    </div>
    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>

    </html>