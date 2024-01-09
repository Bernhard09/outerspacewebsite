<?php
    session_start();

    if (empty($_SESSION["name"]) && empty($_SESSION["password"])) {
        header("Location: login.php");
    }
?>



<!DOCTYPE html> 
<html> 
    <head> 
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--import montserrat font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"rel="stylesheet">
    
        <link rel="stylesheet" href="./style/guestbook.css">
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
                        <li><a href="#">Guest Book</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="./login.php">Log Out</a></li>
                    </ul>
                </nav>
                <div class="title">
                    <h1>Fill Your Attendance</h1>
                    <div class="spacer"> </div> 
                    <p>Don't forget to record your attendance so we can give you the latest news about celestial cosmos!</p>
                </div>
        </header>
        <center></center>
        <div class="form-container">
            <div class="form-wrapper">
                <h2><br><br>Please Fill The Form</h2>
                <form style="justify-content: center" method="POST" action="#">
                    <input type="text" name="name" placeholder="Name"><br/>
                    <?php 
                        $email = $_SESSION['email'];

                        if(isset($_SESSION["email"])) {
                            echo "<input type='email' name='email' placeholder='Email@example.com' value='$email' readonly><br/>";  
                        } else {
                            echo "<input type='email' name='email' placeholder='Email@example.com'><br/>";
                        }
                    ?>
                    <input type="text" name="phone-number" placeholder="Phone number"><br/>
                    <input type="text" name="job" placeholder="Job"><br/>	
                    <input type="text" name="country" placeholder="Country"><br/>
                    <textarea class="message" name="feedback" placeholder="Send your feedback"></textarea>	
                    <input class="submit-btn" name="submit" type="submit" value="Submit">
                </form>
                <div class="spacer"> </div> 
            </div>
            
        </div>
        <div class="form-info-container">
            <div class="form-info"> 
                    <?php if(isset($_POST["submit"])): ?>
                        <h3>Your Form's Information</h3></br>
                        <p>Name          : <?= $_POST["name"]?></p>
                        <p>Email         : <?= $_POST["email"]?></p>
                        <p>Phone Number  : <?= $_POST["phone-number"]?></p>
                        <p>Job           : <?= $_POST["job"]?></p>
                        <p>Country       : <?= $_POST["country"]?></p>
                        <p>Feedback      : <?= $_POST["feedback"]?></p>
                    <?php endif?>
            </div>
        </div>

    </body> 
</html>