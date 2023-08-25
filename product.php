<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "shoping_db");

$query = "select * from all_product";
$result = mysqli_query($conn, $query);

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




?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-Hj/4ad7zG2rvOjIw6R5U6JMHf1Xl0JpOgOqoLkHfv3C/xEjxtMwZ1WxHaMzBh9eADME50Df0G0kioPvivAVfsg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-BxP4yV7C2tnNUjKb7RJ8R6mEEUFeQPOd6n5f5nP5U6lIaqYXl1Hq3AdeJ8kNzKHw+oEjvNpB85Wx1dCf/9e9gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Albert Sans' rel='stylesheet'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    body {
      font-family: 'Albert Sans';

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


      #nav {

        background-color: #0d0d0d;
        position: fixed;

      }



    }



    @media screen and (max-width:540px) {
      .centerOnMobile {
        text-align: center
      }
    }

 

    .footer {
      background-image: url(footerimg.jpg);
      background-repeat: no-repeat;
      background-size: cover;


    }

    input[type=text],
    input[type=email],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #51C8EC;

      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #40a0bd;

    }

    .content {

      background-image: url(contact-bg.jpg);
    }
  </style>

</head>

<body>

  <!-- navigation -->

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="nav">
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="n nav-item">
            <a class="nav-link mx-2 text-uppercase " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="n nav-item">
            <a class="nav-link mx-2 text-uppercase " href="contact.php">Product</a>
          </li>
          <li class="n nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="about.php">About</a>
          </li>

          <li class="n nav-item">
            <a class="nav-link mx-2 text-uppercase" href="contact.php">Contact</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>



  <!-- navigation end -->
  <!-- carousel -->
  <div class="carousel ">

    <img src="slider3.jpg" class="w-100">

  </div>
  <!-- carousel end -->

  <!-- content -->

  <div class="container-fluid p-5 ">

<h1 class=" mt-3">Featured Product</h1>
<hr class="w-25">
<div class="row mt-5">
  <?php
  while ($row = mysqli_fetch_array($result)) {
  ?>


    <div class=" col-md-3 col-sm-6 p-2 col-6  " data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="1000">
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




 

  <!-- content end -->

  <!-- footer -->

  <div class="container-fluid p-0">

    <footer class="footer ">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">footer content</h5>
            <section class="">

              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>


              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>


              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>


              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>


            </section>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">links</h5>

            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#!" class="text-decoration-none text-light">About us</a>

              </li>
              <li class="mb-1">
                <a href="#!" class="text-decoration-none text-light">Delivery</a>
              </li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
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
          <div class="col-lg-3 col-md-6 mb-4">
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
        © 2020 Copyright:

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

</body>

</html>