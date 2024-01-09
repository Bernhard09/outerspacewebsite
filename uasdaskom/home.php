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

        <!--import CSS & Javascript-->
        <link rel="stylesheet" href="style/home.css">
        

        <title>Outer Space</title>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="./blog.php">Blog</a></li>
                    <li><a href="./guestbook.php">Guest Book</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./login.php">Log Out</a></li>
                </ul>
            </nav>
            <div class="title">
                <h1>Get To Know More About Outer Space</h1>
                <div class="spacer"> </div> 
                <p>Explore the extraordinary beauty of outer space through our lens that showcases the wonders of the universe. From shimmering stars to majestic galaxies, witness the boundless charm that stretches across the night sky. Uncover the mysteries behind space phenomena and enjoy the astonishing beauty from places beyond our imagination. Embrace this journey to delve into the indescribable elegance of the vast cosmos.</p>
            </div>
        </header>
        
        <div class="overview"> 
            <div class="overview-content">
                "Hello Visitor! Welcome to the Outer Space website, where the wonders of the cosmos await your exploration. Embark on a celestial journey as we guide you through the enchanting realms of stars, planets, and galaxies. 
                Immerse yourself in the captivating beauty and mysteries that the vast expanse of outer space has to offer. Whether you're a stargazer, a science enthusiast, or simply curious about the universe, our virtual cosmos invites you to discover the awe-inspiring marvels beyond our Earthly confines. 
                Let your curiosity soar as you navigate through the cosmic wonders that make outer space a mesmerizing and endless frontier. Happy exploring! 🚀🌌"
            </div>
        </div>

        <div class="introduction">
            <center>
                <h1 class="introduction-title">Introduction to Outer Space</h1>
                <video width="980">
                    <source src="./assets/videos/Introduction to Space.mp4" type="video/mp4">
                </video>
                <div class="video-component">
                    <img onclick="backForward()" class="btn-backForward" id="btn-backForward" src="./assets/icon/fast-forward.png" alt="back forward video">
                    <img onclick="playAndPause()" class="btn-play" id="btn-playPause" src="./assets/icon/play.png" alt="play video">
                    <img onclick="fastForward()" class="btn-fastForward" id="btn-fastForward" src="./assets/icon/fast-forward.png" alt="fast forward video">
                </div>
            </center>
        </div>

        <center style="margin-bottom: 100px; font-size: x-large; text-decoration: underline; text-underline-offset: 12px;">
            <h1>What's on This Website?</h1>
        </center>

        <div class="feature-container">
            <div class="blog-feature">
                <div >
                    <img src="./assets/images/flame-astronomer-exploring-the-earth-through-telescope.gif" alt="flying-astro" style="width: 300px;margin-top: 80px;">
                </div>
                
                <div class="blog-text">
                    <h1>Blog</h1>
                    <p>Expanding your understanding of outer space and the universe. Explore scientific facts and captivating stories, unveiling the boundless beauty that surrounds us. Step into the extraordinary world of the cosmos!</p>
                </div>  
                
            </div>
            
            <div class="blog-feature"> 
                
                <div class="blog-text">
                    <h1>Guest Book</h1>
                    <p>Don't forget to send your feedback! Share your thoughts, observations, and suggestions, guiding us in enhancing this cosmic expedition. Your engagement shapes this space into a vibrant community of enthusiasts.
                    </p>
                </div>  
                <div>
                    <img src="./assets/images/flame-space-adventures.gif" alt="flying-astro">
                </div>  
            </div>
            
            <div class="blog-feature"> 
                <div>
                    <img src="./assets/images/flame-50.gif" alt="flying-astro"  style="margin-top: 50px;"> 
                </div>  
                <div class="blog-text">
                    <h1>About</h1>
                    <p>Curious about who create this amazing website? you can visit About page, there you can meet our talented writer and developer of this amazing website</p>
                </div>  
                
            </div>
        </div>

    </body>

    <script src="scripts/videoplayer.js"></script>

</html>