<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../image/happy.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/login.js"></script>
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">Login</h2>
        <form action="../postphp/loginProcess.php" method="post">
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <button type="submit" name="submit" class="btn btn-login">Login</button>
            <div style="margin-top:20px; text-align:left;"><a style="text-decoration: underline; font-style: italic;" href="../index.php">Sign Up</a>
            <div style="margin-top:-35px; text-align:right;"><img id="bulb" src="../image/bulb.png" title="Hints" onclick="getHint()"></div></div>
    </form>
    </div>
    
</body>
</html>

