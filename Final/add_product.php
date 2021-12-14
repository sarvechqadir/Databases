<?php
    
    session_start();
    $username = $_SESSION['username'];
    if(isset($_POST['upload']))
    {
        $productname = $_POST['productname'];
        $productprice = $_POST['productprice'];
        $productdesc = $_POST['productdesc'];
        // $image = $_POST['img'];
        $status = $_POST['status'];

        $filename = $_FILES["img"]["name"];
        $tempname = $_FILES["img"]["tmp_name"];

        $target = "images/".$filename;

        
        //Database Connection
        $conn = new mysqli('localhost', 'root', '', 'db_22');
        if($conn->connect_error){
            die('Connection Failed : ' .$conn->connect_error);
        }
        $sql = "INSERT INTO products(product_name, username_seller, descr, price, stat, img) 
                VALUES('$productname', '$username', '$productdesc', '$productprice', '$status', '$filename')";
        if(mysqli_query($conn, $sql))
            echo "Product Added Successfully";
        else 
            echo "Could not add the product";
        
        

        if (move_uploaded_file($tempname, $target))  {
                echo "Image uploaded successfully";
            }
        else{
                echo "Failed to upload image";
        }
        sleep(3);
        header('Location: seller_home.html');
    }