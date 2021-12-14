<?php
    
    session_start();
    // $username = $_SESSION['username'];
    if(isset($_POST['firstnameBS'])){
         $firstnameBS = $_POST['firstnameBS'];
    }
    if(isset($_POST['lastnameBS'])){
         $lastnameBS = $_POST['lastnameBS'];
    }
    if(isset($_POST['usernameBS'])){
         $usernameBS = $_POST['usernameBS'];
    }
    if(isset($_POST['psw-repeatBS'])){
         $passwordBS = $_POST['psw-repeatBS'];
    }
    if(isset($_POST['firstnameSS'])){
         $firstnameSS = $_POST['firstnameSS'];
    }
    if(isset($_POST['lastnameSS'])){
         $lastnameSS = $_POST['lastnameSS'];
    }
    if(isset($_POST['usernameSS'])){
         $usernameSS = $_POST['usernameSS'];
    }
    if(isset($_POST['psw-repeatSS'])){
         $passwordSS = $_POST['psw-repeatSS'];
    }
    if(isset($_POST['usernameBL'])){
         $usernameBL = $_POST['usernameBL'];
         $_SESSION['username'] = $usernameBL;
         $_SESSION['user'] = 'buyer';
    }
    if(isset($_POST['pswBL'])){
         $passwordBL = $_POST['pswBL'];
    }
    if(isset($_POST['usernameSL'])){// echo 'user';
         $usernameSL = $_POST['usernameSL'];
         $_SESSION['username'] = $usernameSL;
         $_SESSION['user']  = 'seller';
    }
    if(isset($_POST['pswSL'])){//echo 'psw';
         $passwordSL = $_POST['pswSL'];
    }
    if(isset($_POST['usernameAL'])){// echo 'user';
         $usernameAL = $_POST['usernameAL'];
         $_SESSION['username'] = $usernameAL;
         $_SESSION['user']  = 'admin';
    }
    if(isset($_POST['pswAL'])){//echo 'psw';
         $passwordAL = $_POST['pswAL'];
    }

    $buyerClass = 'Standard';
    $stat = 'Active';
    $rating = 0;
    
    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'db_22');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    
    

    //Buyer Signup
    if(isset($usernameBS) and isset($firstnameBS) and isset($lastnameBS) and isset($passwordBS))
    {
        $stmt1 = "SELECT username FROM buyer WHERE username='$usernameBS'";
        
        // echo mysqli_num_rows($result);

        
        if($result = mysqli_query($conn, $stmt1) and mysqli_num_rows($result)==0)
        {
            $stmt2 = $conn->prepare('INSERT INTO buyer(username, firstName, lastName, psw, buyerClass, stat)
            VALUES(?, ?, ?, ?, ?, ?)');
            $stmt2->bind_param('ssssss', $usernameBS, $firstnameBS, $lastnameBS, $passwordBS, $buyerClass, $stat);
            $stmt2->execute();
            echo 'RESGISTERATION SUCCESSFUL';
            $stmt2->close();
        }
        else
        {
            echo 'USERNAME ALREADY EXISTS. PLEASE SIGN UP USING ANOTHER USERNAME';
        }
        
    }
    //Seller Signup
    if(isset($usernameSS) and isset($firstnameSS) and isset($lastnameSS) and isset($passwordSS))
    {
        $stmt1 ="SELECT username FROM seller WHERE username='$usernameSS'";
        // $result = mysqli_query($conn, $stmt1);
        // echo mysqli_num_rows($result);
        
        if($result = mysqli_query($conn, $stmt1) and mysqli_num_rows($result)==0)
        {
            $stmt2 = $conn->prepare('INSERT INTO seller(username, firstName, lastName, psw, rating, stat)
            VALUES(?, ?, ?, ?, ?, ?)');
            $stmt2->bind_param('ssssis', $usernameSS, $firstnameSS, $lastnameSS, $passwordSS, $rating, $stat);
            $stmt2->execute();
            echo 'REGISTERATION SUCCESSFUL';
            $stmt2->close();
        }
        else
        {
            echo 'USERNAME ALREADY EXISTS. PLEASE SIGN UP USING ANOTHER USERNAME';
        }
        
    }
    
    //Buyer Login
    if(isset($usernameBL) and isset($passwordBL))
    {
        $stmt1 = "SELECT psw FROM buyer WHERE username='$usernameBL'";
        $result = mysqli_query($conn, $stmt1);
        if(mysqli_num_rows($result)==0)
        {
            echo 'USERNAME DOES NOT EXIST';
        }
        else
        {
            $row = mysqli_fetch_array($result);
            if($row['psw']==$passwordBL)
            {
                
                $stmt2 = "SELECT username, firstName, lastName, buyerClass, stat
                FROM buyer
                WHERE username='$usernameBL'";
                $result2 = mysqli_query($conn, $stmt2);
               
                header('Location: buyer_home.php');
                exit;
                
                
            }
            else
            {
                echo 'WRONG PASSWORD';
            }
            
                
        }
        // <?php
    }
    

    //Seller Login
    // echo $usernameSL;
    // echo $passwordSL;
    if(isset($usernameSL) and isset($passwordSL))
    {
        // echo 'hello';
        $stmt1 = "SELECT psw FROM seller WHERE username='$usernameSL'";
        $result = mysqli_query($conn, $stmt1);
        if(mysqli_num_rows($result)==0)
        {
            echo 'USERNAME DOES NOT EXIST';
        }
        else
        {
            $row = mysqli_fetch_array($result);
            if($row['psw']==$passwordSL)
            {
                // echo 'LOG IN';
                $stmt2 = "SELECT username, firstName, lastName, rating, stat
                FROM seller
                WHERE username='$usernameSL'";
                $result2 = mysqli_query($conn, $stmt2);
                
                header('Location: seller_home.html');
                exit;
                
            }
            else{
                echo 'WRONG PASSWORD';
            }
        }
    }

    if(isset($usernameAL) and isset($passwordAL))
    {
        $stmt1 = "SELECT psw FROM adm WHERE username='$usernameAL'";
        $result = mysqli_query($conn, $stmt1);
        if(mysqli_num_rows($result)==0)
        {
            echo 'USERNAME DOES NOT EXIST';
        }
        else
        {
            $row = mysqli_fetch_array($result);
            if($row['psw']==$passwordAL)
            {
                // echo 'LOG IN';
                $stmt2 = "SELECT username, firstName, lastName, rating, stat
                FROM seller
                WHERE username='$usernameSL'";
                $result2 = mysqli_query($conn, $stmt2);
                
                header('Location: admin_home.html');
                exit;
                
            }
            else{
                echo 'WRONG PASSWORD';
            }
        }
    }    

    
    
   
    
    
    
?>
        


