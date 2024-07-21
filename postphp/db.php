<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "showcase";

$conn = mysqli_connect("$hostname", "$username", "$password", "$dbname");

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
?>