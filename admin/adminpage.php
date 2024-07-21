<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="icon" href="../image/happy.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/adminpage.css">
    <script src="../js/logout.js"></script>
    <script src="../js/adminpage.js"></script>
</head>
<body>

    <div id="header">
    <h1 id="title">Admin Page</h1>
    <nav>
        <ul>
            <li><a href=#main>Main</a></li>
            <li><a href=#images>Images</a></li>
            <li><a href=#slideshows>Slideshows</a></li>
            <li><a href=#audios>Audios</a></li>
            <li><a href=#videos>Videos</a></li>
            <li><a href=#userlists>User Lists</a></li>
            <li><button id="logout" onclick=logout()>Logout</button></li>
        </ul>
    </nav>
    </div>

    <section id="main">
        <h3>Hi Admin, here is the Main Page.</h3>
        <p>May use the navigation bar to navigate to different sections.</p>
        <ol>
            <li>Main</li>
            <li>Images</li>
            <li>Slideshows</li>
            <li>Audios</li>
            <li>Videos</li>
            <li>User Lists</li>
            <li>Logout</li>
        </ol>
    </section>

    <section id="images">
        <table style="width: 100%;">
            <tr>
                <td><img src="../image/ai01.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai02.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai03.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai04.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai05.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai06.jpeg" onclick="enlarge(this)"></td>
            </tr>
            <tr>
                <td><img src="../image/ai07.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai08.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai09.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai10.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai11.jpeg" onclick="enlarge(this)"></td>
                <td><img src="../image/ai12.jpeg" onclick="enlarge(this)"></td>
            </tr>
        </table>
    </section>
    
    <section id="slideshows">
        <div class="slideshow-container">
            <div class="slide fade">
                <img src="../image/ss01.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss02.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss03.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss04.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss05.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss06.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss07.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss08.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss09.jpeg">
            </div>
            <div class="slide fade">
                <img src="../image/ss10.jpeg">
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var slides = document.getElementsByClassName("slide");
            var dots = document.getElementsByClassName("dot");
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            for (var i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000);
        }
    </script> 

    <section id="audios">
        <table>
            <tr>
                <td><img src="../image/audio01.jpeg"></td>
                <td><img src="../image/audio02.jpeg"></td>
                <td><img src="../image/audio03.jpeg"></td>
            </tr>
            <tr>
                <td>Audio 01</td>
                <td>Audio 02</td>
                <td>Audio 03</td>
            </tr>
            <tr>
                <td>
                    <audio controls>
                    <source src="../audio/audio01.mp3" type="audio/mp3">
                    </audio>
                </td>
                <td>
                    <audio controls>
                    <source src="../audio/audio02.mp3" type="audio/mp3">
                    </audio>
                </td>
                <td>
                    <audio controls>
                    <source src="../audio/audio03.mp3" type="audio/mp3">
                    </audio>
                </td>
            </tr>
        </table>
    </section>

    <section id="videos">
    <video controls width="500px;" id="video01">
        <source src="../video/video01.mp4" type="video/mp4">
    </video>
        <ul>
            <li><button onclick="changeSize('smallest')">Smallest</button></li>
            <li><button onclick="changeSize('small')">Small</button></li>
            <li><button onclick="changeSize('normal')">Normal</button></li>
            <li><button onclick="changeSize('large')">Large</button></li>
            <li><button onclick="changeSize('largest')">Largest</button></li>
        </ul>
    </section>

    <section id="userlists">
        <h3>User Lists</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Profile Picture</th>
            </tr>
            <?php 
                include '../postphp/getprofile.php'; 
            ?>
        </table>
    </section>

</body>
</html>