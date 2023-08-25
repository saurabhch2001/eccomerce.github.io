<?php

session_start();

?>




<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Untitled Document</title>
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


      .navbar.is-fixed {

        background-color: #0d0d0d;
        position: fixed;

      }


      .n a.active {
        border-bottom: none;

      }


      .n a:hover {
        border-bottom: none;

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
              <a class="nav-link mx-2 text-uppercase " aria-current="page" href="index.php">Home</a>
            </li>
            <li class="n nav-item">
            <a class="nav-link mx-2 text-uppercase   " href="product.php">Product</a>
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
    </div>
  </nav>


  <!-- navigation end -->


  <!-- carousel -->
  <div class="carousel ">

    <img src="slider2.jpg" class="w-100">

  </div>
  <!-- carousel end -->


  <!-- our story -->

  <div class="container">
    <br>
    <h1 class="text-center">Our story</h1>
    <br> <br>

    <div class="row d-flex justify-content-center">

      <img src="aboutimg1.png" class="shadow p-2 bg-muted w-75 ">

    </div>


    <div class="row">



      <div class="text-centre">


        <p>Our story began in 2005, when our founder - a lifelong shoe enthusiast - decided to open up his own shoe store. At first, it was just a small operation, with a few racks of shoes in a single storefront. But as word spread about the quality of our products and the expertise of our staff, we began to grow.

        </p>


      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-10 col-sm-8 m-auto col-md-6 ">
        <img src="aboutimg1.jpg" class="shadow p-2 bg-muted w-100 ">
      </div>
      <div class="col-12 col-sm-12 mt-2  mt-sm-2 col-md-6 ">



        <ul>


          <div class="row mt-md-5">
            <div class="col-12 col-sm-12 ">
              <li>
                <p>

                  Today, we're proud to say that we have multiple locations across the country, and a thriving online store that ships shoes to customers all over the world. But no matter how much we grow, we remain committed to the same values that got us started in the first place - quality, affordability, and exceptional customer service.
                </p>
              </li>

            </div>


            <div class="col-12 col-sm-12">
              <li>
                <p> At our shoe store, we're passionate about footwear. We believe that the right pair of shoes can make all the difference in the world - whether you're hitting the gym, going for a run, or just looking to make a statement with your fashion choices. That's why we've made it our mission to provide our customers with the best possible selection of shoes, at prices that won't break the bank.
                </p>
              </li>


            </div>


          </div>


        </ul>


      </div>


    </div>

    <hr>
  </div>

  <!-- our story end -->

  <!-- our store -->


  <div class="container">
    <h1 class="text-center">OUR STORE</h1>

    <div class="row">

      <div class="col-12 col-sm-12 col-md-4 mt-md-5">




        <p>At our shoe store, we offer a wide variety of footwear, including sneakers, boots, sandals, and more. We carry shoes for men, women, and children, so the whole family can find something they love. Our products come from some of the best brands in the industry, including Nike, Adidas, Puma, and more.
        </p>



      </div>


      <div class="col-12 col-sm-12 col-md-4">
        <img src="aboutimg2.jpg" class="shadow p-2 w-100">
      </div>

      <div class="col-12 col-sm-12 col-md-4 mt-md-5">




        <p> Whether you're looking for something stylish to wear to work, a comfortable pair of sneakers for your daily jog, or a trendy pair of sandals for your next beach vacation, we've got you covered. And if you ever need help finding the perfect pair of shoes, our friendly and knowledgeable staff are always here to assist you.
        </p>



      </div>



    </div>





  </div>



  <!-- our store end -->


  <!-- our store -->
  <div class="container-fluid p-2 mt-md-3">

    <h1 class="text-center">ABOUT OUR PRODUCT</h1>



    <div class="row text-center ">

      <div class="col-12 col-sm-8 col-md-7 mt-md-5 ">


        <p class=" p-md-5">Our selection of shoes includes everything from sneakers to sandals, boots to loafers, and everything in between. We carry shoes for men, women, and kids, so there's something for everyone in the family. We also offer a variety of brands, including Nike, Adidas, Puma, Reebok, and more</p>


        <hr>

      </div>

      <div class="col-12 col-sm-4 col-md-5 d-flex justify-content-end ">
        <img src="aboutimg3.jpg" class="shadow p-2 bg-muted w-100 ">
      </div>

    </div>




    <div class="row text-center mt-sm-3">
      <div class="col-12 col-sm-4 col-md-5 order-1 order-sm-0 mt-sm-3">
        <img src="aboutimg4.jpg" class="shadow p-2 bg-muted w-100 ">
      </div>
      <div class="col-12 col-sm-8 col-md-7 mt-md-5 ">


        <p class="p-md-5">We know that finding the perfect pair of shoes can be a challenge, which is why we have a team of experts who can help you find exactly what you're looking for. Whether you need shoes for work, school, or a special occasion, we're here to make sure you find the perfect fit.</p>
        <hr>

      </div>

    </div>

    <div class="row  mt-2 mt-sm-3 text-center">

      <div class="col-12 col-sm-8 col-md-7 mt-md-5">


        <p class="p-md-5 mt-3 mt-sm-0"> At our store, we believe that everyone deserves to have comfortable, stylish shoes that make them feel confident and empowered. That's why we're committed to providing high-quality shoes that are both affordable and fashionable.
        </p>
        <hr>

      </div>

      <div class="col-12  col-sm-4 col-md-5 d-flex justify-content-end ">
        <img src="aboutimg5.jpg" class="shadow p-2 bg-muted w-100 ">
      </div>

    </div>
    <br><br>
    <p class="text-center">Thank you for choosing our shoe store as your go-to destination for all your footwear needs. We look forward to serving you and helping you find the perfect pair of shoes!</p>


    <hr>

  </div>


  <!-- our store -->


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