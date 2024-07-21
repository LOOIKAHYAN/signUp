<?php
include "db.php";
$username = $_SESSION['username'];

$getProfileQuery = "SELECT username, password, email, phoneno, firstname, lastname, profilepicture FROM profile WHERE username = '$username'";
$getProfileResult = mysqli_query($conn, $getProfileQuery);
if (mysqli_num_rows($getProfileResult) == 1) {
    while ($row = mysqli_fetch_assoc($getProfileResult)) {
?>
   <table>
   <tr>
    <td colspan="2" style="text-align: center;">
        <img src="<?php echo $row['profilepicture']; ?>" alt="Profile Picture" style="width: 100px; height: 100px; border: 3px outset darkgreen;">
    </td>
</tr>
    <tr>
        <td>Username</td>
        <td><?php echo $row['username']; ?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><?php echo $row['password']; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><?php echo $row['phoneno']; ?></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?php echo $row['firstname']; ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo $row['lastname']; ?></td>
    </tr>
   </table>
<?php
    }
} else {
    echo "No data found";
}
?>
