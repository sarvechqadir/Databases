<?php
    session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme The Band</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;
      }
      h3,
      h4 {
        margin: 10px 0 30px 0;
        letter-spacing: 10px;
        font-size: 20px;
        color: #111;
      }
      .container {
        padding: 80px 120px;
      }
      .person {
        border: 10px solid transparent;
        margin-bottom: 25px;
        width: 80%;
        height: 80%;
        opacity: 0.7;
      }
      .person:hover {
        border-color: #f1f1f1;
      }
      .carousel-inner img {
        -webkit-filter: grayscale(90%);
        filter: grayscale(90%); /* make all photos black and white */
        width: 100%; /* Set width to 100% */
        margin: auto;
      }
      .carousel-caption h3 {
        color: #fff !important;
      }
      @media (max-width: 600px) {
        .carousel-caption {
          display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
        }
      }
      .bg-1 {
        background: #2d2d30;
        color: #bdbdbd;
      }
      .bg-1 h3 {
        color: #fff;
      }
      .bg-1 p {
        font-style: italic;
      }
      .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
      }
      .list-group-item:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
      }
      .thumbnail p {
        margin-top: 15px;
        color: #555;
      }
      .btn {
        padding: 10px 20px;
        background-color: #333;
        color: #f1f1f1;
        border-radius: 0;
        transition: 0.2s;
      }
      .btn:hover,
      .btn:focus {
        border: 1px solid #333;
        background-color: #fff;
        color: #000;
      }
      .modal-header,
      h4,
      .close {
        background-color: #333;
        color: #fff !important;
        text-align: center;
        font-size: 30px;
      }
      .modal-header,
      .modal-body {
        padding: 40px 50px;
      }
      .nav-tabs li a {
        color: #777;
      }
      #googleMap {
        width: 100%;
        height: 400px;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
      }
      .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
      }
      .navbar li a,
      .navbar .navbar-brand {
        color: #d5d5d5 !important;
      }
      .navbar-nav li a:hover {
        color: #fff !important;
      }
      .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
      }
      .navbar-default .navbar-toggle {
        border-color: transparent;
      }
      .open .dropdown-toggle {
        color: #fff;
        background-color: #555 !important;
      }
      .dropdown-menu li a {
        color: #000 !important;
      }
      .dropdown-menu li a:hover {
        background-color: red !important;
      }
      footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
      }
      footer a {
        color: #f5f5f5;
      }
      footer a:hover {
        color: #777;
        text-decoration: none;
      }
      .form-control {
        border-radius: 0;
      }
      textarea {
        resize: none;
      }
    </style>
  </head>
<body>

<?php
    // session_start();
    if(isset($_GET['action'])){
        if($_GET['action']=="delete"){
            
            $i=0;
            foreach($_SESSION['cart'] as $values)
            {
                if($values==$_GET['id'])
                {
                    // echo $i;
                    unset($_SESSION['cart'][$i]);
                    echo "<script>alert('Item Removed')</script>";
                    echo "<script>window.location='shopping_cart.php'</script>";
                }
                $i++;
            }
        }
    }
    $conn = new mysqli('localhost', 'root', '', 'db_22');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    $size = count($_SESSION['cart']);
    // echo "Number: ".$size. " ";
    $i = 0;

    if(!empty($_SESSION['cart']))
    {
        ?>
        <table class="table" style="text-align: centre">
        <thead>
            <tr>
                <th> Product Name</th>
                <th> Price</th>
                <th> Action</th>

            </tr>

        </thead>
        <?php
        $total=0;
        
        foreach($_SESSION['cart'] as $value)
        {
            $current=$value;
                $query = "SELECT* FROM products WHERE product_id='$current'";
                $result = mysqli_query($conn, $query);
                while($data = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                    <td><?php echo $data['product_name']; ?> </td>
                    <td><?php echo $data['price']; $total += $data['price'];?> </td>
                    <td><a href="shopping_cart.php?action=delete&id=<?php echo $data['product_id']?>">Remove Item</a> </td>
                </tr>
                    <?php
                }
        }
    }
    ?>
    
</table><br><br>
<h4>
    Total Amount = <?php if(isset($total))echo $total;?>
</h4>
<button onclick="window.location='browse_product.php'">
    Return to Shopping
</button>
<form action="checkout.php" method="post">
<button onclick="window.location='checkout.php'" name="total" value="<?php echo $total?>">
    Check out
</button>

</form>
<?php
   
    
    // session_destroy();
?>
</body>
</html>