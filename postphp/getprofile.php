<?php

include "db.php";

$getProfileQuery = "SELECT username, password, email, phoneno, firstname, lastname, profilepicture FROM profile";
$getProfileResult = mysqli_query($conn, $getProfileQuery);
$count = 1;
if (mysqli_num_rows($getProfileResult) > 0) {
    while ($row = mysqli_fetch_assoc($getProfileResult)) {
        echo "<tr><td>" .$count. "</td>";
        // Check if profile picture path exists
        if ($row['profilepicture']) {
            echo "<td><img src='" . $row['profilepicture'] . "' alt='Profile Picture' style='height:50px;'></td>";
        } else {
            echo "<td>No image</td>";
        }
        echo "<td>" .$row['username']. "</td><td>" .$row['password']. "</td><td>" .$row['email']."</td><td>" .$row['phoneno']. "</td><td>" .$row['firstname']. "</td><td>" .$row['lastname']. "</td></tr>";
        $count++;
    }
} else {
    echo "<tr><td colspan='8'>No data found</td></tr>";
}
?>
