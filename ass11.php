<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ass1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>login</title>
</head>

<body>

    <div class="register">
        <form method="post"action="http://localhost/server/php_ass11.php" target="_blank">
            <center> <label class="username" for="username"> User name </label></center>
            <br>
            <input type="text" id="username" placeholder="enter your name" required name="username">
            <br><br>
            <center> <label class="emailid" for="emailid"> Email ID </label></center>
            <br>
            <input type="text" id="emailid" placeholder="Enter Email ID " required name="email">
            <br><br>
            <center><label class="password" for="password"> Password </label></center>
            <br>
            <input type="password" id="password" placeholder="Enter Password" required name="password">
            <br><br>
            <input type="checkbox" value="reg" id="checkbox" />
            <label class="check" for="checkbox"> I agree to the terms & condition </label>
            <br><br>
            <center><input type="submit" name="submit" value="Register" id="reg"></center>
            <br>
           <center> <a  href="ass1.html">I have an account.</a></center>
        </form>
    </div>


    <footer>
        <div class="col1">
            <h2>RESOURCES</h2>
            <a href="#">Application</a>
            <a href="#">Documentation</a>
            <a href="#">Systems</a>
            <a href="#">FAQ</a>
        </div>
        <div class="col2">
            <h2>PRICING</h2>
            <a href="#">Overview</a>
            <a href="#">Premium plans</a>
            <a href="#">Promotions</a>
        </div>
        <div class="col3">
            <h2>COMPANY</h2>
            <a href="#">About us</a>
            <a href="#">Blog</a>
            <a href="#">Careers</a>
            <a href="#">Press</a>
        </div>
        <div class="col4">
            <h2>SOCIAL</h2>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instgram</a>
            <a href="#">Linkedin</a>
        </div>


        <a href="#"><i style="font-size: 50px; color: rgb(35, 35, 122);margin-left: 100px; margin-top: 40px;"
                class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"
                style="font-size: 50px; color :rgb(29, 29, 60); margin-top: 40px;"></i></a>
        <a href="#"><i class="fa-brands fa-instagram-square"
                style="font-size: 50px; color:rgb(82, 8, 74); margin-top: 40px; "></i></a>
        <a href="#"><i style="font-size: 50px; color:rgb(101, 101, 228); margin-top: 40px;"
                class="fa-brands fa-linkedin"></i></a>


    </footer>


</body>

</html>