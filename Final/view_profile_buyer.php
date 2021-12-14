<?php
    
    session_start();
    // $username = $_SESSION['username'];

    
    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'db_22');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    
    $username  = $_SESSION['username']; 

        
        // echo 'LOG IN';
        $stmt2 = "SELECT *
        FROM buyer
        WHERE username='$username'";
        $result2 = mysqli_query($conn, $stmt2);
        // echo 123;
        while($row = mysqli_fetch_row($result2)) {
        echo "Username: " . $row[0] . "\r\n";
        echo "<br>";
        echo "First Name: " . $row[1] . "\r\n";
        echo "<br>";
        echo "Last Name: " . $row[2] . "\r\n";
        echo "<br>";
        echo "Class: " . $row[4] . "\r\n";
        echo "<br>";
        echo "Status:" . $row[5] . "\r\n";
        echo "<br>";    
        }
        
        

    


    
    
   
    
    
    
?>
        


