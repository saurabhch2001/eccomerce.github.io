<?php

session_start();

// if (isset($_SESSION['ccc'])) {
//   $item_quantity = 0;
//   $item_price = 0;
//   if (($_SESSION['ccc'])) {
//       foreach ($_SESSION['ccc'] as $item2) {
//           $item_quantity = $item_quantity + $item["quantity"];
//           $item_price = $item_price + ($item["price"] * $item["quantity"]);
//       }
//   }
// }


if (isset($_GET['cls'])) {

  if (isset($_SESSION['ccc'])) {
    unset($_SESSION['ccc']);
  }
}


if (isset($_GET['rem'])) {
  $nm = $_GET['rem'];


  if (isset($_SESSION['ccc'])) {
    foreach ($_SESSION['ccc'] as $i => $items) {

      if ($items['code'] == $nm) {
        unset($_SESSION['ccc'][$i]);
      }
    }
  }
} //

if (isset($_GET['wish'])) {
  $ws = $_GET['wish'];


  if (isset($_SESSION['www'])) {
    foreach ($_SESSION['www'] as $w => $witems) {

      if ($witems['code'] == $ws) {
        unset($_SESSION['www'][$w]);
      }
    }
  }
} //

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cart</title>
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
  <link href='https://fonts.googleapis.com/css?family=Albert Sans' rel='stylesheet'>
  <style>

body{
  font-family: 'Albert Sans';

}



    .navbar {

      width: 100%;
      transition: top 0.3s;
 
      top: 0;
      right: 0;
      left: 0;
     

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


      

      .n a.active {
        border-bottom: none;

      }


      .n a:hover {
        border-bottom: none;

      }



    }
  </style>


</head>

<body>
  <!-- navigation -->


  <nav class="navbar navbar-fixed navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
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
              <a class="nav-link mx-2 text-uppercase" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="n nav-item">
            <a class="nav-link mx-2 text-uppercase  " href="product.php">Product</a>
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



  <!-- navigation end -->

  <!-- cart -->

  <section class="bg-light my-5">
    <div class="container">

      <div>
        <p class="mb-0"><span class="text-muted">Clear</span> <a href="cart.php?cls=1" class="text-body">cart </a></p>
      </div>
      <div class="row mt-3 pb-3">

        <!-- cart -->
        <div class="col-lg-9">
          <div class="card border shadow-0">

            <?php

            $t = 0;
            $p = 0;

            if (isset($_SESSION['ccc'])) {
              foreach ($_SESSION['ccc'] as $i => $item) {

                $p = $p + $item['price'];
            ?>
                <div class="mx-4 my-2 p-2">

                  <div class="row  d-flex justify-content-between align-items-center ">
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <img class="img-fluid rounded-3" src="<?php echo $item['pic']; ?>">

                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3">

                      <p class="lead fw-normal mb-2"><?php echo $item['name']; ?></p>
                      <p><span class="text-dark">Code: </span><?php echo $item['code']; ?>
                    </div>


                    <div class="col-md-2 col-lg-2 col-xl-2 ">
                      <h5 class="mb-0"><?php echo "₹" . $item['price']; ?></h5>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">

                      <a href="cart.php?rem=<?php echo $item['code']; ?>" class="text-primary"><i class="fas fa-trash fa-lg"></i></a>

                    </div>
                  </div>



                  <hr>

                </div>

            <?php
              }
            }
            ?>
            <div class="border-top pt-4 mx-4 mb-4">
              <p><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
              </p>
            </div>
          </div>
        </div>


        <!-- cart -->
        <!-- summary -->
        <div class="col-lg-3">

          <div class="card shadow-0 border">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="mb-2">Total price:</p>
                <p class="mb-2"><?php echo "₹" . $p; ?></p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Discount:</p>
                <p class="mb-2 text-success"><?php echo "₹" . $p  * 0.10; ?></p>
              </div>

              <hr />
              <div class="d-flex justify-content-between">
                <p class="mb-2">Total price:</p>
                <p class="mb-2 fw-bold"><?php echo "₹"  . $p - $p  * 0.10; ?></p>
              </div>

              <div class="mt-3">
                <a href="#" class="btn btn-primary w-100 shadow-0 mb-2"> Make Purchase </a>
                <a href="#" class="btn btn-light w-100 border mt-2"> Continue Shoping </a>
              </div>
            </div>
          </div>
        </div>
        <!-- summary -->
      </div>
    </div>




  </section>
  <!-- cart end -->

  <section>
    <div class="container my-5">
      <header class="mb-4">
        <h3>Wishlist</h3>
      </header>

      <div class="row">
        <?php



        if (isset($_SESSION['www'])) {
          foreach ($_SESSION['www'] as $w => $witem) {

        ?>
            <div class="col-lg-3 col-md-6 col-sm-6">

              <div class="card px-4 border mt-3 ">

                <div class="mask px-2" style="height: 50px;">
                  <div class="d-flex justify-content-end">

                    <a href="cart.php?wish=<?php echo $witem['code']; ?>"><i class="fas fa-heart text-primary fa-lg  pt-3 m-2"></i></a>
                  </div>
                </div>
                <a href="#" class="">
                  <img src="<?php echo $witem['pic']; ?>" class="card-img-top rounded-2" />
                </a>
                <div class="card-body d-flex flex-column text-center pt-3 border-top">
                  <a href="#" class="nav-link"><?php echo $witem['name']; ?></a>
                  <div class="price-wrap mb-2">
                    <strong class=""><?php echo "₹" . $witem['price']; ?></strong>

                  </div>
                  <div class=" d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
                  </div>
                </div>


              </div>
            </div>

        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>

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