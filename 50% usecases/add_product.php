<?php
    
    session_start();
    // $username = $_SESSION['username'];
    if(isset($_POST['productname'])){
         $productname = $_POST['productname'];
        //  echo 'hello1';
    }
    if(isset($_POST['productprice'])){
         $productprice = $_POST['productprice'];
        //  echo 'hello2';
    }
    if(isset($_POST['productdesc'])){
         $productdesc = $_POST['productdesc'];
        // echo 'hello3';    
    }
    if(isset($_POST['img'])){
         $image = $_POST['img'];
        //  echo $image;
        //  echo 'hello4';
    }
    $target = "images/".$image;

    if(isset($_POST['status'])){
         $status = $_POST['status'];
    }
    
    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'db_22');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    $username = $_SESSION['username'];
    $sql = "INSERT INTO products(product_name, username_seller, descr, price, stat, img) 
            VALUES('$productname', '$username', '$productdesc', '$productprice', '$status', '$image')";
    if(mysqli_query($conn, $sql))
        echo "Product Added Successfully";
    else 
        echo "Could not add the product";
    
    sleep(3);

    if (move_uploaded_file($image, $target))  {
            echo "Image uploaded successfully";
        }
    else{
            echo "Failed to upload image";
    }
    sleep(3);
    header('Location: seller_home.html');