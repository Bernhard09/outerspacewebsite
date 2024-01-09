<?php
    session_start();

    if (empty($_SESSION["name"]) && empty($_SESSION["password"])) {
        header("Location: login.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--import montserrat font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"rel="stylesheet">

        <link rel="stylesheet" href="./style/about.css">

        <title>About</title>
    </head>
    <body>
        <header class="header">
            <!--NAVIGATION BAR-->
            <nav class="navbar">
                <div class="brand-title">
                    <div class="firstname">Outer</div>
                    <div class="lastname">Space</div>
                    <div>.com</div>
                </div>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="guestbook.php">Guest Book</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="./login.php">Log Out</a></li>
                </ul>
            </nav>
            <div class="wrapper">
                <div class="title">
                    <h1>Hello!</h1>
                    <div class="spacer"> </div> 
                    <p>Hello, I'm Bryant Bernhard, an enthusiastic web developer dedicated to crafting captivating online experiences. With a background in web development, I've woven the digital realm with mesmerizing code. Beyond work, I'm an avid admirer of outer space and the beauty of the universe. My interest in the cosmos extends beyond the realm of science; it serves as inspiration that guides my creativity in designing a virtual world. From distant galaxies to cosmic events, my fascination with the wonders of space involves immersing myself in exploring every corner of knowledge that enriches my perspective as a web developer. Join me on this exploration journey where coding and a love for the universe synergize, creating a digital space filled with beauty and innovation.</p>
                    <div>
                        
                    </div>
                </div>
                <img class="profile-pict" src="./assets/images/self_potrait.jpg" alt="self_potrait">
            </div>
        </header>
    </body>

</html>