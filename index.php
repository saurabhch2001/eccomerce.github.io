<?php

session_start();

$conn = mysqli_connect("localhost", "root", "password_db", "shoping_db");

$query = "select * from product";
$query2 = "select * from best";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);
if (isset($_POST['wishlist'])) {
  $check = false;


  if (isset($_SESSION['www'])) {
    foreach ($_SESSION['www'] as $w => $witem) {
      if ($witem['code'] == $_POST['wcode']) {




        $check = true;
        break;
      }
    }
  }

  if ($check == false) {

    $_SESSION['www'][] = array(
      'name' => $_POST['wname'],
      'price' => $_POST['wprice'],
      'pic' => $_POST['wpic'],
      'code' => $_POST['wcode'],

    );
  }
}

if (isset($_POST['submit'])) {
  $check = false;


  if (isset($_SESSION['ccc'])) {
    foreach ($_SESSION['ccc'] as $i => $item) {
      if ($item['code'] == $_POST['fcode']) {




        $check = true;
        break;
      }
    }
  }

  if ($check == false) {

    $_SESSION['ccc'][] = array(
      'name' => $_POST['fname'],
      'price' => $_POST['fprice'],
      'pic' => $_POST['fpic'],
      'code' => $_POST['fcode'],

    );
  }
}

// login/singup

if (isset($_POST["login"])) {


  $email = $_POST["email"];

  $password = $_POST["password"];



  $conn = mysqli_connect("localhost", "root", "password_db", "shoping_db");
  $query2 = "select * from register_data where email='$email' and password='$password'";
  $result2 = mysqli_query($conn, $query2);
  $total = mysqli_num_rows($result2);

  if ($total > 0) {
    $rrr = mysqli_fetch_array($result2);
    //echo $rrr['name']."<br>".$rrr['age'];
    session_start();

    $_SESSION['fnm'] = $rrr['frstname'];
    $_SESSION['lnm'] = $rrr['lstname'];
    $_SESSION['email'] = $rrr['email'];
    $_SESSION['user'] = $rrr['user_id'];
    $_SESSION['contact'] = $rrr['contact'];
    $_SESSION['address'] = $rrr['address'];
    $_SESSION['gender'] = $rrr['gender'];
    $_SESSION['password'] = $rrr['password'];

    header("location:profile.php");
  } else {
    echo '<script>alert("email or password is incorrect");</script>';
  }
}
// login/singup end
// $_SESSION['status'] = 1; //if logged in
// $_SESSION['status'] = 0; //if logged out





?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="logo_.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-Hj/4ad7zG2rvOjIw6R5U6JMHf1Xl0JpOgOqoLkHfv3C/xEjxtMwZ1WxHaMzBh9eADME50Df0G0kioPvivAVfsg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-BxP4yV7C2tnNUjKb7RJ8R6mEEUFeQPOd6n5f5nP5U6lIaqYXl1Hq3AdeJ8kNzKHw+oEjvNpB85Wx1dCf/9e9gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href='https://fonts.googleapis.com/css?family=Albert Sans' rel='stylesheet'>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <style>
    body {
      font-family: 'Albert Sans';

    }

    .footer {
      background-image: url(footerimg.jpg);
      background-repeat: no-repeat;
      background-size: cover;


    }

    .n a.active {
      border-bottom: 3px solid red;

    }


    .n a:hover {
      border-bottom: 3px solid red;

    }


    .navbar {

      width: 100%;
      transition: top 0.3s;
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1;

    }

    .navbar.is-fixed {
      position: fixed;
      z-index: 123;

      background-color: black !important;
      display: block;

      animation: slideDown 0.35s ease-out;
    }


    @media only screen and (max-width: 768px) {

      /* For mobile phones: */


      .navbar.is-fixed {

background-color: #0d0d0d;
position: fixed;

}


.n a.active {
border-bottom: none;

}


.n a:hover {
border-bottom:none;

}




    }








    @media screen and (max-width:540px) {
      .centerOnMobile {
        text-align: center
      }


    }


    .product-grid {
      font-family: 'Poppins', sans-serif;
      text-align: center;
    }

    .product-grid .product-image {
      overflow: hidden;
      position: relative;
      z-index: 1;
    }

    .product-grid .product-image a.image {
      display: block;
    }

    .product-grid .product-image img {
      width: 100%;
      height: auto;
    }



    .product-grid .product-links {
      padding: 0;
      margin: 0;
      list-style: none;
      position: absolute;
      top: 10px;
      right: -50px;
      transition: all .5s ease 0s;
    }

    .product-grid:hover .product-links {
      right: 10px;
    }

    .product-grid .product-links li {

      display: block;
      transition: all 0.3s;
    }


    .product-grid .title {
      font-size: 16px;
      font-weight: 500;
      text-transform: capitalize;
      margin: 0 0 7px;
    }







    .product-grid .price {
      color: #0d0d0d;
      font-size: 14px;
      font-weight: 600;
    }
  </style>



</head>

<body>






  <!-- navigation -->


  <nav class="navbar navbar-expand-lg navbar-dark " aria-label="Offcanvas navbar large">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="logo_.png" alt="" class="invert " style="width: 50px;"></a>
      <div class=" order-lg-last ">
        <p class="mb-0 d-flex ">
          <a class="nav-link mx-2 d-flex align-items-center justify-content-center text-white" href="cart.php">
            <i class="fa fa-shopping-cart"></i>
            <span class="badge rounded-pill badge-notification ">
              <?php
              if (isset($_SESSION['ccc'])) {
                echo count($_SESSION['ccc']);
              } else {
                echo 0;
              }

              ?></span>
          </a>
          <a class="ms-2 d-flex align-items-center justify-content-center text-decoration-none text-white" href="profile.php"><i class='far fa-user'></i></a>
        </p>

      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Nike</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav mx-auto">
            <li class="n nav-item">
              <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="n nav-item">
              <a class="nav-link mx-2 text-uppercase " href="product.php">Product</a>
            </li>
            <li class="n nav-item">
              <a class="nav-link mx-2 text-uppercase " href="about.php">About</a>
            </li>
  
            <li class="n nav-item">
              <a class="nav-link mx-2 text-uppercase" href="contact.php">Contact</a>
            </li>
  
  
          </ul>
         
        </div>
      </div>
    </div>
  </nav>




  </header>



  <!-- navigation end -->


  <!-- carousel -->

  <div class="carousel  " data-aos="zoom-out" data-aos-duration="1000">

    <img src="carosel.jpg" class="w-100">

  </div>
  <!-- carousel end -->


  <div class="container-fluid p-5 ">

    <h1 class=" mt-3">Featured Product</h1>
    <hr class="w-25">
    <div class="row mt-5">
      <?php
      while ($row = mysqli_fetch_array($result)) {
      ?>


        <div class=" col-md-3 col-sm-6 p-2 col-6  " data-aos="fade-up" data-aos-anchor-placement="top" data-aos-duration="1000">
          <div class="product-grid border">
            <div class="product-image">
              <a href="#" class="image">
                <img src="<?php echo $row['image']; ?>" alt="image">
              </a>

              <ul class="product-links">


                <li>

                  <form method="post" action="">


                    <input type="hidden" name="wpic" value="<?php echo $row['image']; ?>">
                    <input type="hidden" name="wprice" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="wname" value="<?php echo $row['product_name']; ?>">
                    <input type="hidden" name="wcode" value="<?php echo $row['product_code']; ?>">

                    <button class="btn btn-outline-primary" type="submit" name="wishlist" href="#"><i class="fa fa-heart"></i></button>
                  </form>

                </li>

                <li>

                  <form method="post" action="">


                    <input type="hidden" name="fpic" value="<?php echo $row['image']; ?>">
                    <input type="hidden" name="fprice" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="fname" value="<?php echo $row['product_name']; ?>">
                    <input type="hidden" name="fcode" value="<?php echo $row['product_code']; ?>">

                    <button class="btn btn-outline-primary  mt-1" type="submit" name="submit"><i class="fa fa-shopping-cart"></i></button>
                  </form>
                </li>



              </ul>


            </div>




            <div class="product-content p-2 border">
              <h3 class="title"><?php echo $row['product_name']; ?></h3>
              <div class="price"><?php echo "₹" . "&nbsp" . $row['price']; ?></div>
              <form method="post" action="">


              </form>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>


  <!-- content -->

  <div class="container py-2 ">
    <div class="row align-items-center">

      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row align-items-center">
                <div class="col-md py-2" data-aos="zoom-in-right" data-aos-duration="2000">
                  <h3>Find your pair today </h3>
                  <hr class="w-50">
                  <p>Nike shoes are made with high-quality materials that provide comfort, durability, and style. They're perfect for any activity, from running to casual wear. Additionally, Nike shoes offer a wide range of features such as excellent traction, breathability, and support. These features make them an ideal choice for athletes and fitness enthusiasts. </p>
                  <button class="btn btn-primary" href="about.php"><a class="text-decoration-none text-light" href="about.php"> Learn More</a></button>
                </div>
                <div class="col-md py-2" data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000">
                  <img class="d-block img-fluid" src="home_abt_shoe.jpg" alt="First slide">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>




  <!-- content end -->


  <!-- content2 -->
  <div class="container-fluid p-5">

    <h1 class=" mt-3">Best Selling</h1>
    <hr class="w-25">
    <div class="row mt-5">
      <?php
      while ($row = mysqli_fetch_array($result2)) {
      ?>
        <div class=" col-md-3 col-sm-6 p-2  col-6  "  data-aos="fade-up" data-aos-anchor-placement="top" data-aos-duration="1000">
          <div class="product-grid border">
            <div class="product-image">
              <a href="#" class="image">
                <img src="<?php echo $row['image']; ?>" alt="image">
              </a>

              <ul class="product-links">


                <li>

                  <form method="post" action="">


                    <input type="hidden" name="wpic" value="<?php echo $row['image']; ?>">
                    <input type="hidden" name="wprice" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="wname" value="<?php echo $row['product_name']; ?>">
                    <input type="hidden" name="wcode" value="<?php echo $row['product_code']; ?>">

                    <button class="btn btn-outline-primary" type="submit" name="wishlist" href="#"><i class="fa fa-heart"></i></button>
                  </form>

                </li>

                <li>

                  <form method="post" action="" id="formId">


                    <input type="hidden" name="fpic" value="<?php echo $row['image']; ?>">
                    <input type="hidden" name="fprice" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="fname" value="<?php echo $row['product_name']; ?>">
                    <input type="hidden" name="fcode" value="<?php echo $row['product_code']; ?>">

                    <button class="btn btn-outline-primary  mt-1" type="submit" name="submit" id="submit"><i class="fa fa-shopping-cart"></i></button>
                  </form>
                </li>



              </ul>


            </div>




            <div class="product-content p-2 border">
              <h3 class="title"><?php echo $row['product_name']; ?></h3>
              <div class="price"><?php echo "₹" . "&nbsp" . $row['price']; ?></div>
              <form method="post" action="">


              </form>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>


  <!-- content2 end -->



  <!-- content3-->

  <div class="container">
    <div class="row align-items-center">

      <div class="col">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row align-items-center">

                <div class="col-md py-2" data-aos="fade-right"  data-aos-duration="1000">
                  <img class="d-block img-fluid" src="home_abt_shoe.jpg" alt="First slide">
                </div>

                <div class="col-md py-2" data-aos="zoom-in-left" data-aos-duration="2000">
                  <h3>Shoes that always feel right </h3>
                  <hr class="w-50">
                  <p>
                    These shoes become more than mere footwear, they become a reliable companion on your journey through life. Through the highs and lows, they remain steadfast, never failing to keep your feet snug and supported. Whether you're chasing dreams or simply savoring the little moments, these shoes become an integral part of your story, etching their presence in the memories you create.</p>
                  <button class="btn btn-primary" href="product.php"><a class="text-decoration-none text-light" href="about.php"> Learn More</a></button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <div class="col">


    </div>

  </div>


  <div class="container" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-center mt-3">We are glad to welcome you at our store
      <hr>
    </h2>


    <p>Welcome to our online shoe emporium, where style meets comfort! At our store, we take immense pleasure in extending a warm welcome to you. Explore our curated collection of premium footwear that effortlessly blends fashion and functionality. Whether you're looking for the perfect pair to make a statement or shoes that offer unmatched comfort, we're here to guide you through your shopping journey. Join us and experience the joy of finding your perfect fit!"</p>
  </div>



  <!-- content3 end -->

  <!-- footer -->

  <div class="container-fluid p-0">

    <footer class="footer ">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">Nike</h5>
            <section class="">

              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>


              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>


              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>


              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>


            </section>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 col-5">
            <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">Company</h5>

            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#!" class="text-decoration-none text-light">About us</a>

              </li>
              <li class="mb-1">
                <a href="#!" class="text-decoration-none text-light">Delivery</a>
              </li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6  col-5 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">links</h5>

            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#!" class="text-decoration-none text-light">About us</a>

              </li>
              <li class="mb-1">
                <a href="#!" class="text-decoration-none text-light">Delivery</a>
              </li>
              <li class="mb-1">
                <a href="#!" class="text-decoration-none text-light">Pricing</a>
              </li>

            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 col-12">
            <h5 class="mb-1" style="letter-spacing: 2px; color: #818963;">opening hours</h5>
            <table class="table" style="color: #4f4f4f; border-color: #666;">
              <tbody>
                <tr>
                  <td>Mon - Fri:</td>
                  <td>8am - 9pm</td>
                </tr>
                <tr>
                  <td>Sat - Sun:</td>
                  <td>8am - 1am</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:

      </div>

    </footer>

  </div>

  <!-- footer end -->



  <script>
    const header = document.querySelector(".navbar");
    const toggleClass = "is-fixed";
    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;
      if (currentScroll > 150) {
        header.classList.add(toggleClass);
      } else {
        header.classList.remove(toggleClass);
      }
    });


    AOS.init();
  </script>





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



</body>

</html>


<!-- $contact = $_POST["contact"];
  $address = $_POST["address"];
  $gender = $_POST["gender"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $user = $_POST["user_id"]; -->


<!-- <div class="row">
  <div class="col">
    <div class="row m-3">
      <div class="col">
        <img src="sign-up-img2.jpg" class="w-100 p-2 border-2 border border-dark" alt="">

      </div>


      <div class="col">
        <img src="sign-up-img2.jpg" class="w-75 p-2 border-2 border border-dark" alt="">

      </div>

    </div>

    <div class="row m-3">
      <div class="col">
        <img src="sign-up-img2.jpg" class="w-75 p-2 border-2 border border-dark" alt="">

      </div>


      <div class="col">
        <img src="sign-up-img2.jpg" class="w-100 p-2 border-2 border border-dark" alt="">

      </div>

    </div>


  </div>
  <div class="col">

    <img src="sign-up-img2.jpg" alt="" class="w-75 p-2 border-2 border border-dark">
  </div>

</div> -->