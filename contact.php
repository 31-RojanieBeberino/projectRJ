<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.1-web/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class='nav-contact'>
        <div class="nav-logo">
            <h1>ROJANIE</h1>
        </div>
        <div class="burger">
            <div class="l"></div>
            <div class="l"></div>
            <div class="l"></div>
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contant</a></li>
            </ul>
        </div>
    </nav>
    <div class="contact-banner">
        <h1>Contact us <hr></h1>
    </div>
    <div class="contact-form">
        <h1>Contact Form</h1>
        <div class="contact-inputs">
            <form class="form-input" action="contact-form.php" method="POST">
                <span>Name*</span><input type="text" placeholder="Rojanie" name="firstname" class="name">
                <input type="text" placeholder="Beberino" name="lastname" class="name"><br>
                <span>Email*</span><input type="email" placeholder="rojanie@gmail.com" name="email" class="sub-inputs"><br>
                <span>Phone*</span><input type="numder" name="number" placeholder="(63+) 956 *** ***" class="sub-inputs" ><br>
                <span>Message</span><textarea name="message" id="" cols="30" rows="10" placeholder="I would like to inform...."></textarea><br>
                <button type="submit" class="btn-form">Send</button>
            </form>
        </div>
        <p ></p>
    </div>
    <div class="footer">
        <div class="footerContent">
            <div class="footer-brand">
                <h1>Rojanie</h1>
                <div class="social-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
            <div class="footer-support">
                <h3>Supports</h3>
                <ul>
                    <li><a href="#">Genesis Dellosa</a></li>
                    <li><a href="#">Jennieca Gobaton</a></li>
                    <li><a href="#">Fellyrose Beberino</a></li>
                    <li><a href="#">DevStudioPh</a></li>
                </ul>
            </div>
            <div class="footer-companies">
                <h3>Companies</h3>
                <ul>
                    <li><a href="#">DevStudioPh</a></li>
                    <li><a href="#">ServMart Carissa</a></li>
                    <li><a href="#">RYDS Learning Services</a></li>
                </ul>
            </div>
            <div class="footer-form">
                <h3>Send your message here.</h3>
                <div class="contact">
                    <!-- <i class="fas fa-envelope"></i><br> -->
                    <input type="text" placeholder="Enfter your e-mail address"><br>
                    <button>Sign In</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.js"></script>
<script src="js/js.js"></script>
</html>