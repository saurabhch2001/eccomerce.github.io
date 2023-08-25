<?php
session_start(); {
}


if (!isset($_SESSION['email'])) {
  // If the user is not logged in, redirect them to the login page

  header('Location: login.php');
  exit();
}



if (isset($_POST["reset_password"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $new_password = $_POST["new-password"];

  $conn = mysqli_connect("bjwsqeyqnceuefhonbtn-mysql.services.clever-cloud.com", "uw73jydcez11n8fc", "qW2AINujY6DksIor1mtP", "bjwsqeyqnceuefhonbtn") or die("you are not connected");
  $query = "update register_data set password='$new_password' where  password='$password' AND email='$email'";
  mysqli_query($conn, $query);
}

if (isset($_POST["save_changes"])) {
  $email2 = $_POST["email2"];
  $pass = $_POST["pass"];
  $frstname = $_POST["frstname"];
  $lstname = $_POST["lstname"];
  $contact = $_POST["contact"];
  $username = $_POST["username"];
  $address = $_POST["address"];

  $conn = mysqli_connect("bjwsqeyqnceuefhonbtn-mysql.services.clever-cloud.com", "uw73jydcez11n8fc", "qW2AINujY6DksIor1mtP", "bjwsqeyqnceuefhonbtn") or die("you are not connected");
  $query = "update register_data set frstname='$frstname', lstname='$lstname', email='$email2',
   user_id='$username',contact='$contact',`address`='$address' where  password='$pass' ";
  mysqli_query($conn, $query);
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
  <link rel="icon" type="image/x-icon" href="logo_.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>
    body {

      color: #1a202c;
      text-align: left;
      background-color: white;
    }

   



    .main-body {
      padding: 15px;
    }

    .card {
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
    }
  </style>

</head>

<body>

<div class=" d-flex justify-content-end mx-5 my-5 ">
        <a href="index.php" class=" text-decoration-none" ><i class="fa fa-close" aria-hidden="true"></i></a>
        </div>


  <div class="container mt-5">

  
    <div class="">
      <div class="card">
        <div class="rounded-top text-white d-flex flex-row" style="background-color: #51C8EC; max-height:150px;">
        
        

          <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
            <img src="profile.jpg" alt="Generic placeholder image" class="img-fluid img-thumbnail  mb-2" style="width: 150px; z-index: 1">


          </div>
          
          <div class="ms-3 mt-auto">

            <h4 class="">Username :<?php echo $_SESSION['user'] ?></h4>
          </div>

        </div>


        <div class="d-flex justify-content-end mt-2 me-5">
          <button type="button" class="btn btn-outline-primary" data-bs-target="#myModal2" data-bs-toggle="modal" style="z-index: 1;">
            <i class="fa fa-edit"></i>
        </div>

        <div class="card-body px-5 ">
          <div class="mt-5">

            <div class="p-4" style="background-color: #f8f9fa;">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $_SESSION['fnm'] . "&nbsp " . $_SESSION['lnm']  ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $_SESSION['email'] ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Contact no</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $_SESSION['contact']  ?>
                </div>
              </div>
              <hr>


              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $_SESSION['address'] ?>
                </div>
              </div>
              <hr>

            </div>
          </div>

          <div class="d-flex justify-content-end">

          <button type="button" class="btn  btn-outline-primary ms-3">
            

          <a href="logout.php" name="profile" class="dropdown-item"><i class='fas fa-sign-out-alt'></i></i>logout</a>


          </button>

            <button type="button" class="btn  btn-outline-primary ms-3" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-refresh "></i> reset password</button>

          </div>
        </div>



      </div>


    </div>

  </div>











  </div>
  </div>




  <!-- modal -->

  <div class=" modal fade " id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content" style="max-width:500px; ">


        <!-- Modal body -->
        <div class="modal-body">
          <div class="d-flex justify-content-end">

            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>



          <div class="">

            <h4 class="text-muted"><img src="editimg.png" style="width: 50px;"> Edit Profile </h4>
          </div>



          <div class="card text-white" style="background-color: #51C8EC;">
            <div class="card-body">

              <form class="form" action="" method="POST">
                <div class="row">
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>First Name</label>
                          <input class="form-control" type="text" name="frstname" placeholder="first name" value="<?php echo $_SESSION['fnm'] ?>">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input class="form-control" type="text" name="lstname" placeholder="last name" value=" <?php echo $_SESSION['lnm'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="email" name="email2" placeholder="email" value=" <?php echo $_SESSION['email'] ?>">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Contact No</label>
                          <input class="form-control" type="text" name="contact" placeholder="contact" value="<?php echo $_SESSION['contact']  ?>">
                        </div>


                      </div>

                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Username</label>
                          <input class="form-control" type="text" name="username" placeholder="user id" value=" <?php echo $_SESSION['user'] ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col mb-3">
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="address" class="form-control" placeholder="Address" value=" <?php echo $_SESSION['address'] ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col mb-3">
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" name="pass" class="form-control" placeholder="enter your password" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" name="save_changes" type="submit">Save Changes</button>
                  </div>
                </div>
              </form>
            </div>

          </div>

        </div>



      </div>
    </div>
  </div>

  <!-- modal end -->





  <!-- modal2 -->

  <div class=" modal fade " id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="width:400px; ">


        <!-- Modal body -->
        <div class="modal-body">
          <div class="d-flex justify-content-end">

            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>





          <h4 class="text-muted"><img src="resetpassimg.png" style="width: 60px;"> Reset Password </h4>
          <div class="card text-white" style="background-color: #51C8EC;">
            <div class="card-body">
              <form method="post" action="">

                <div class="form-group mb-3 mt-4">

                  <label>Email</label>
                  <input type="email" class="form-control " required name="email" placeholder="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group mb-3">
                  <label>Password</label>
                  <input type="password" class="form-control " required name="password" placeholder="password">
                </div>
                <div class="form-group mb-3">
                  <label>New Password</label>
                  <input type="password" class="form-control " required name="new-password" placeholder="new password">
                </div>
                <hr>
                <button type="submit" name="reset_password" class="btn  btn-primary mt-3">Reset password</button>

              </form>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
  <!-- modal2 end -->





</body>

</html>