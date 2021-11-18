<?php  
    
    session_start();
    // print_r($_SESSION);
    $username = $_SESSION['username'];
    $user = $_SESSION['user'];

    if(isset($_POST['newusername'])){
         $newusername = $_POST['newusername'];
    }
    if(isset($_POST['newfirstname'])){
         $newfirstname = $_POST['newfirstname'];
    }
    if(isset($_POST['newlastname'])){
         $newlastname = $_POST['newlastname'];
    }
    if(isset($_POST['newpsw-repeat'])){
         $newpassword = $_POST['newpsw-repeat'];
    }
    $conn = new mysqli('localhost', 'root', '', 'db_22');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    if($user=='buyer')
    {
        $stmt;
        if(isset($newusername))
        {
            $stmt = "UPDATE buyer SET username='$newusername' WHERE username='$username'";
        }
        if(isset($newfirstname))
        {
            $stmt = "UPDATE buyer SET firstName='$newfirstname' WHERE username='$username'";
        }
        if(isset($newlastname))
        {
            $stmt = "UPDATE buyer  SET lastName='$newlastname' WHERE username='$username'";
        }
        if(isset($newpassword))
        {
            $stmt = "UPDATE buyer SET psw='$newpassword' WHERE username='$username'";
        }
        // echo $stmt;
        $result = mysqli_query($conn, $stmt);
        if($result)
        {
             echo "Updatedd Successfuly";
        }

    }
    elseif($user=='seller')
    {
        $stmt;
        if(isset($newusername))
        {
            $stmt = "UPDATE seller SET username='$newusername' WHERE username='$username'";
        }
        if(isset($newfirstname))
        {
            $stmt = "UPDATE seller SET firstName='$newfirstname' WHERE username='$username'";
        }
        if(isset($newlastname))
        {
            $stmt = "UPDATE seller  SET lastName='$newlastname' WHERE username='$username'";
        }
        if(isset($newpassword))
        {
            $stmt = "UPDATE seller SET psw='$newpassword' WHERE username='$username'";
        }
        //echo $stmt;
        $result = mysqli_query($conn, $stmt);
        if($result)
        {
             echo "Updatedd Successfuly";
        }
    }
    
    
?> 