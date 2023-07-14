<?php 
session_start();
include('connection.php');
session_destroy();
header("Location:http://localhost/user_management/index.php");