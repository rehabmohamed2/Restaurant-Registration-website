<?php
 $servername = "localhost";
 $username = "root";
 $password = '';
 $db_name = "javapoint";
  
     // Create connection
    $conn = new mysqli($servername,$username,$password,$db_name);
 
                
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        if (empty($_POST['username'])&&empty($_POST['password'])){ echo "enter the data";}
        else{
        $username =  $_REQUEST['username'];
        
        $password =  $_REQUEST['password'];
       
        }
    }
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO  login( username , password) VALUES ('$username','$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>your reservation is made successfully.";
            
        } else{
            echo "ERROR: Hush! Sorry try again $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
