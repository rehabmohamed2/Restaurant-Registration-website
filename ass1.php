<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ass1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>login</title>
</head>

<body>
    <nav>
        <ul>
            <li> <a href="#">Home</a></li>
            <li><a href="#"> About Us</a></li>
            <li><a href="#">Services</a> </li>
            <li><a href="#">Contact</a> </li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>
    <!-- <div class="innerbox" id="card"> -->
    <div class="login">
        <form action = "http://localhost/server/authentication.php" onsubmit = "return validation()" method = "POST">

            <img src="icon1.jpg" class="icon">
            <center> <label class="username" for="username" id="username"> Username </label></center>
            <br>
            <input type="text" name="username" id="username" placeholder="Enter Username" required autofocus>
            <br><br>
            <center><label class="password" for="password" id="password"> Password </label></center>
            <br>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <br><br>
            <center><input type="submit" value="Log in" id="logi"></center>
            <br>
            <a href="#">Lost your password ?</a>
            <br><br>
            <a href="ass11.html">I Don’t have an account</a>
            <!-- <button type="button" onclick="ass11.html" class="btn">I Don’t have an account</button> -->
        </form>
        
    </div>
    <script>  
        function validation()  
        {  
            var id=document.f1.user.value;  
            var ps=document.f1.pass.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("User Name is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  
        
    </script>  
    <!-- <div class="register">
            <form method="post">
                <center> <label class="username" for="username"> User name </label></center>
                <br>
                <input type="text" id="username" placeholder="enter your name" required>
                <br><br>
                <center> <label class="emailid" for="emailid"> Email ID </label></center>
                <br>
                <input type="text" id="emailid" placeholder="Enter Email ID " required>
                <br><br>
                <center><label class="password" for="password"> Password </label></center>
                <br>
                <input type="password" id="password" placeholder="Enter Password" required>
                <br><br>
                <input type="checkbox" value="reg" id="checkbox" />
                <label class="check" for="checkbox"> I agree to the terms & condition </label>
                <br><br>
                <center><input type="submit" value="Register" id="reg"></center>
                <br>
                <a href="ass1.html">I have an account.</a>
                <button type="button" onclick="openlogin()" class="btn">I have an account. </button>

    </form>
    </div> -->



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

    <!-- <script>
        var card = document.getElementById("card");
        function openregister() {
            card.style.transform = "rotateY(-180deg)";
        }
        function openlogin() {
            card.style.transform = "rotateY(0deg)";
        }

    </script> -->

</body>

</html>