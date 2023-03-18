<?php      
    $host = "localhost";  
    $username = "tassnem";  
    $password = '12345678';  
    $db_name = "javapoint";  
      
    $con = mysqli_connect('localhost', 'tassnem', '12345678', 'javapoint');  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  