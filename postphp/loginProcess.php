<?php

include "db.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$findAdminQuery = "SELECT * FROM profile WHERE username = '$username' and username = 'admin' and password = '$password' and password = '1234'";
$findAdminResult = mysqli_query($conn, $findAdminQuery);
if (mysqli_num_rows($findAdminResult) == 1) {
    echo "<script>alert('Welcome to Admin Page, dear Admin')</script>";
    echo "<script>window.location.replace('../admin/adminpage.php');</script>";
}else {

$findUserQuery = "SELECT * FROM profile WHERE username = '$username' and password = '$password'";
$findUserResult = mysqli_query($conn, $findUserQuery);
    if (mysqli_num_rows($findUserResult) == 1) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Welcome to User Page, dear $username')</script>";
        echo "<script>window.location.replace('../user/userpage.php');</script>";
        exit;
    }else {
        echo "<script>alert('Incorrect username or password. Please check your credentials.')</script>";
        echo "<script>window.location.replace('../login/login.php');</script>";
        exit;
    }
}
?>
