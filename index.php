<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" href="image/happy.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/index.js"></script>
</head>
<body>
    <nav>
        <ul>
            <li><a href=#account>Account Information</a></li>
            <li><a href=#personal>Personal Information</a></li>
            <li><a href=#contact>Contact Information</a></li>
            <li><a href=#addition>Additional Information</a></li>
        </ul>
        <div>
            <a href="login/login.php"><img id="login" src="image/login.png"></a>
            <img id="happy" src="image/happy.png" title="Click Me" onclick="gif()">
        </div>
    </nav>
    
    <form enctype="multipart/form-data" onsubmit="return validateInfo()" action="postphp/submit.php" method="post">
    <section id="account">
        <h2>Account Information</h2>
        <table>
            <tr>
              <td>Username *</td>
              <td>:</td>
              <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
              <td>Password *</td>
              <td>:</td>
              <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
              <td>Confirm Password *</td>
              <td>:</td>
              <td><input type="password" id="confirmpassword" name="confirmpassword"></td>
            </tr>
          </table>         
    </section>

    <section id="personal">
        <h2>Personal Information</h2>
        <table>
            <tr>
              <td><label for="firstname">First Name </label></td>
              <td>:</td>
              <td><input type="text" id="firstname" name="firstname"></td>
            </tr>
            <tr>
              <td><label for="lastname">Last Name </label></td>
              <td>:</td>
              <td><input type="text" id="lastname" name="lastname"></td>
            </tr>
            <tr>
              <td><label for="email">Email Address </label></td>
              <td>:</td>
              <td><input type="email" id="email" name="email"></td>
            </tr>
          </table>
    </section>

    <section id="contact">
        <h2>Contact Information</h2>
        <table>
            <tr>
              <td>Address</td>
              <td>:</td>
              <td><textarea name="address"></textarea></td>
            </tr>
            <tr>
              <td>City</td>
              <td>:</td>
              <td><input type="text" name="city"></td>
            </tr>
            <tr>
              <td>Country</td>
              <td>:</td>
              <td>
                <select name="country">
                  <option>-- Select a country --</option>
                  <option>Malaysia</option>
                  <option>Singapore</option>
                </select>
              </td>
            </tr>
          </table>
    </section>

    <section id="addition">
        <h2>Additional Information</h2>
        <table>
            <tr>
              <td>Date of Birth </td>
              <td>:</td>
              <td><input type="date" name="dob"></td>
            </tr>
            <tr>
              <td>Phone Number </td>
              <td>:</td>
              <td><input type="text" name="phoneno"></td>
            </tr>
            <tr>
              <td>Profile Picture</td>
              <td>:</td>
              <td><input type="file" name="profilepicture"></td>
            </tr>
          </table>
    </section>

    <section>
        <button type="submit" name="submit">Submit</button>
        <p></p><br><br>
    </section>

  </form>
    
    <footer>
        <p>Looi Kah Yan</p>
   </footer>
</body>
</html>