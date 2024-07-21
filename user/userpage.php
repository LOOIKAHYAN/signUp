<?php
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="icon" href="../image/happy.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/userpage.css">
    <script src="../js/logout.js"></script>
</head>
<body>

    <div id="header">
    <h1 id="title">User Page</h1>
    <nav>
        <ul>
            <li><a href=#main>Main</a></li>
            <li><a href=#myprofile>My Profile</a></li>
            <li><button id="logout" onclick=logout()>Logout</button></li>
        </ul>
    </nav>
    </div>

    <section id="main">
        <h3>Hi <?php echo $username ?>, here is the Main Page.</h3>
        <p>May use the navigation bar to navigate to different sections.</p>
        <ol>
            <li>Main</li>
            <li>My Profile</li>
            <li>Logout</li>
        </ol>
    </section>

    <section id="myprofile">
        <h3>My Profile</h3>
            <?php 
                include '../postphp/getmyprofile.php'; 
            ?>
    </section>

</body>
</html>