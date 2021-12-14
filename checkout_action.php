<?php
    if(isset($_POST['fullname'])){
        // echo 1;
        $fullname=$_POST['fullname'];
    }
    if(isset($_POST['email'])){
        // echo 2;
        $email=$_POST['email'];
    }
    if(isset($_POST['address'])){
        // echo 3;
        $address=$_POST['address'];
    }
    if(isset($_POST['city'])){
        // echo 4;
        $city=$_POST['city'];
    }
    if(isset($_POST['state'])){
        // echo 5;
        $state=$_POST['state'];
    }
    if(isset($_POST['zip'])){
        // echo 6;
        $zip=$_POST['zip'];
    }
    if(isset($_POST['total'])){
        // echo 7;
        $total = $_POST['total'];
    }

    $conn = new mysqli('localhost', 'root', '', 'db_22');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }

    $query = "INSERT INTO orders(fullname, email, addr, city, stat, zip, total_amount)
    VALUES('$fullname', '$email', '$address', '$city', '$state', '$zip', '$total')";
    if(mysqli_query($conn, $query))
    {
        echo "Your order has been placed";
    }
    else
    {
        echo mysqli_error($conn);
        echo "Could not place order successfully";
    }

?>