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

        <link rel="stylesheet" href="./style/content.css">

        <title>Content</title>
    </head>
    <body>
        <!--HEADER-->
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
                    <li><a href="#">Blog</a></li>
                    <li><a href="guestbook.php">Guest Book</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="./login.php">Log Out</a></li>
                </ul>
            </nav>
            <div class="title">
                <h1>Blog</h1>
                <div class="spacer"> </div> 
                <p>Step Into the Blogs: A Curated Journey of Exploration through an Array of Blogs, Unveiling the Mysteries and Wonders of Outer Space and Our Vast Universe! Feel the Freedom to Immerse Yourself in a Wealth of Knowledge, Sparking Your Curiosity and Igniting Your Passion for the Celestial Realm. Discover Rich Narratives, Expert Insights, and Captivating Stories That Illuminate the Infinite Marvels Beyond Our Blue Planet. Expand Your Understanding of the Cosmos, One Blog at a Time!</p>
            </div>
        </header>

        <div class="content-wrapper">
            <div class="content-box"> 
                <div class="content-item">
                    <div class="content-title">
                        12 James Webb Space Telescope findings that changed our understanding of the universe in 2023
                    </div>    
                    <p>by Sharmila Kuthunur | 24-12-2023</p>
                    <img src="./assets/images/news-1.webp" alt="">
                    <p>This year, the space observatory has continued to deliver breathtaking and scientifically valuable images of the cosmos. Here's a look back at the JWST discoveries that altered our understanding of the universe in 2023. </p>
                    <a href="./blog-content/12 James Webb Space Telescope findings.html">See More..</a>
                </div>
            </div>
            <div class="content-box"> 
                <div class="content-item">
                    <div class="content-title">
                        10 Mindblowing Discoveries of the Universe
                    </div>    
                    <p>by Jack Sackman | 24-12-2023</p>
                    <img src="./assets/images/news-2.avif" alt="">
                    <p>Launched in 2009, the Kepler telescope has rapidly expanded our knowledge of the universe by identifying over 1,000 new planets. Its mission is simple: search for habitable planets beyond our solar system. This groundbreaking observatory has revolutionized our understanding, unveiling mind-bending theories in just over five years. </p>
                    <a href="./blog-content/10 Mindblowing Discoveries of the Universe.html">See More..</a>
                </div>
            </div>
            <div class="content-box"> 
                <div class="content-item">    
                    <div class="content-title">
                        Saturn's rings will disappear from view in March 2025, NASA says
                    </div>
                    <p>by Caitlin O'Kane  | 8-11-2023</p>
                    <img src="./assets/images/news-3.jpg" alt="">
                    <p>Saturn's rings will seemingly disappear from view in 2025, a phenomenon caused by the planet's rotation on an axis. Saturn won't actually lose its rings in 2025, but they will go edge-on, meaning they will be essentially invisible to earthlings, NASA confirmed to CBS News. </p>
                    <a href="./blog-content/Saturn rings will disapear.html">See More..</a>
                </div>
            </div>
        </div>

    </body>
</html>