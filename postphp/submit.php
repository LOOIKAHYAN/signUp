<?php
include "db.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$city = $_POST["city"];
$country = $_POST["country"];
$dob = $_POST["dob"];
$phoneno = $_POST["phoneno"];

// Check if a file was uploaded
if (isset($_FILES["profilepicture"]) && $_FILES["profilepicture"]["error"] == UPLOAD_ERR_OK) {
    // Define the directory where you want to store uploaded images
    $uploadDir = "../uploads/";

    // Generate a unique filename to prevent overwriting existing files
    $fileName = uniqid() . "_" . $_FILES["profilepicture"]["name"];

    // Move the uploaded file to the desired directory
    $uploadPath = $uploadDir . $fileName;
    move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $uploadPath);

    // Store the path of the uploaded image in the database
    $profilepicture = $uploadPath;
} else {
    // If no file was uploaded, set $profilepicture to NULL or any default value you prefer
    $profilepicture = null;
}

$findUser = "SELECT * FROM profile where username = '$username'";
$findUserResult = mysqli_query($conn, $findUser);
if (mysqli_num_rows($findUserResult) > 0) {
    echo "<script>alert('Username $username found in database, please register with another username.')</script>";
    echo "<script>window.location.replace('../index.php');</script>";
    exit;
} else {
    // Include profile picture path in the SQL query
    $sql = "INSERT INTO profile (firstname, lastname, email, username, password, address, city, country, dob, phoneno, profilepicture) VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$address', '$city', '$country', '$dob', '$phoneno', '$profilepicture')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Successfully submitted. You may login using username and password.')</script>";
        echo "<script>window.location.replace('../login/login.php');</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>