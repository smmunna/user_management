<?php

session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}

include('connection.php');
$sql = "SELECT * FROM `user_details`";
$result = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="mb-2 bg-black py-3 fixed-top">
        <?php
        include('adminNavbar.php');
        ?>
    </div>
    <div class="mt-5 pt-5">
        <h3 style="text-align: center; font-weight: bold;">Admin Activity</h3>
        <hr>
    </div>

    <div class="px-2" style="text-align: center;">
        <div class="table-responsive">
            <table class="table table-striped  table-hover">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th colspan="3" style="text-align: center;">Operation </th>

                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><a href="http://localhost/user_management/Pages/Admin/viewUser.php?id=<?php echo $row['id']; ?>"><button class="btn btn-info">View</button></a></td>
                        <td><button class="btn btn-success">Update</button></td>
                        <td><a href="http://localhost/user_management/Pages/Admin/deleteUser.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger" onclick="confirmDelete(event)">X</button></a></td>
                    </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="bg-black py-2 fixed-bottom">
        <?php
        include('adminFooter.php');
        ?>
    </div>

    <!-- Bootstrap Js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>



<script>
    function confirmDelete(event) {
        event.preventDefault();

        if (confirm("Are you sure you want to delete this user?")) {
            // User confirmed, proceed to the delete page
            const deleteUrl = event.target.parentElement.href; // Get the delete page URL
            window.location.href = deleteUrl;
        } else {
            // User canceled, do nothing
        }
    }
</script>