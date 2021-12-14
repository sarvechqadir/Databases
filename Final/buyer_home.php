

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
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Furniture Panda</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <!--   <li><a href="#myPage">HOME</a></li> -->
            <li><a href="#updateinfo">UPDATE INFORMATION</a></li>
            <li><a href="#compare">PRODUCTS</a></li>
            <li><a href="#artwork">BROWSE</a></li>

            <li><a href="#orders">ORDERS</a></li>
            <li><a href="#profile">MY PROFILE</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                >MORE <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li>
                    <form method="post">
                        <input type="submit" name="logout" value="Log Out"></input>
                    </form>
                </li>
                <!-- <li><a href="#">Extras</a></li>
                <li><a href="#">Media</a></li> -->
              </ul>
            </li>
            <li>
              <a href="#search"
                ><span class="glyphicon glyphicon-search"></span
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
    <!-- Container update -->
    <div id="updateinfo" class="bg-1">
      <div class="container">
        <h1 class="text-center text-capitalize pt-5">Update Information</h1>
        <hr class="w 25 mx-auto pt-5" />
        <div class="w-50 mx-auto">
          <div class="text-centre">
            <button
              onclick="document.location='update.html'"
              type="submit"
              class="btn btn-default"
            >
              Click to Edit Profile
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Container My Profile -->
    <div id="profile">
      <div class="container">
        <h1 class="text-center text-capitalize pt-5">View Buyer Profile</h1>
        <hr class="w 25 mx-auto pt-5" />
        <div class="w-100 mx-auto">
          <div class="text-center">
            <button
              onclick="document.location='view_profile_buyer.php'"
              type="submit"
              class="btn btn-default"
            >
              View Profile
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Container Add product-->
    <div id="compare" class="bg-1">
      <div class="container">
        <h1 class="text-center text-capitalize pt-5">View Products</h1>
        <hr class="w 25 mx-auto pt-5" />
        <div class="w-100 mx-auto">
          <div class="text-centre">
            <button
              onclick="document.location='browse_product.php'"
              type="submit"
              class="btn btn-default"
            >
              View Product
            </button>
          </div>
          <!-- <form action="add_product.php" method="post">
            <div class="form-group">
              <label for="text">Product Name </label>
              <input
                type="text"
                placeholder="Enter Product Name"
                name="productname"
              />
            </div>
            <div class="form-group">
              <label for="number">Price </label>
              <input
                type="number"
                placeholder="Enter Product Price"
                name="productprice"
              />
            </div>
            <div class="form-group">
              <label for="text">Description</label>
              <input
                type="text"
                placeholder="Describe your Product"
                name="productdesc"
              />
            </div>

            <div class="form-group">
              <label for="img"> Add an Image</label>
              <input type="file" name="img" />
              <!-- <button type="submit">Upload</button> -->
          <!-- </div>
            <label for="status">Select Status</label>
            <select name="status">
              <option value="In Stock">In Stock</option>
              <option value="Out of Stock">Out of Stock</option>
            </select>
            <div>
              <button type="submit" class="btn btn-default">Add Product</button>
            </div>
          </form> -->
        </div>
      </div>
    </div>

    <!-- Container Artwork Details -->
    <!-- <div id="artwork">
      <div class="container">
        <h1 class="text-center text-capitalize pt-5">
          Browse Artwork and View Details
        </h1>
        <hr class="w 25 mx-auto pt-5" />
        <div class="w-100 mx-auto">
          <div class="text-center">
            <button type="submit" class="btn btn-default">Browse</button>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Container View Orders -->
    <div id="orders" class="bg-1">
      <div class="container">
        <h1 class="text-center text-capitalize pt-5">View Orders</h1>
        <hr class="w 25 mx-auto pt-5" />
        <div class="w-100 mx-auto">
          <div class="text-center">
            <button type="submit" class="btn btn-default">View Orders</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
      <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span> </a
      ><br /><br />
      <p>
        Bootstrap Theme Made By
        <a
          href="https://www.w3schools.com"
          data-toggle="tooltip"
          title="Visit w3schools"
          >Chuddy Buddys</a
        >
      </p>
    </footer>

    <script>
      $(document).ready(function () {
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on("click", function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate(
              {
                scrollTop: $(hash).offset().top,
              },
              900,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });
      });
    </script>
  </body>
</html>
