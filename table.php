<?php
 $servername = "localhost";
 $username = "tassnem";
 $password = "12345678";
 $dbname = "reservations";
  
     // Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
 
                
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        if (empty($_POST['Name'])&&empty($_POST['phone'])&&empty($_POST['People'])&&empty($_POST['date'])&&empty($_POST['Message'])){ echo "enter the data";}
        else{
        $name =  $_REQUEST['Name'];
        $phone = $_REQUEST['phone'];
        $no =  $_REQUEST['People'];
        $date = $_REQUEST['date'];
        $massage = $_REQUEST['Message'];
        }
    }
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO data2 (name, phone,number, date, massege) VALUES ('$name','$phone','$no','$date','$massage')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>your reservation is made successfully.";
        } else{
            echo "ERROR: Hush! Sorry try again $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
