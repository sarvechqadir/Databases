<?php
    $id = $_POST['id'];
    // echo $id;
    // echo 123123;
    $conn = new mysqli('localhost', 'root', '', 'db_22');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    $sql = "DELETE FROM products WHERE product_id='$id'";
    if(mysqli_query($conn, $sql))
            echo "Product deleted Successfully";
        else 
            echo "Could not delete the product";
?>