<?php


if (isset($_POST["register"])) {
    $fname = $_POST["frstname"];
    $lname = $_POST["lstname"];
    $email = $_POST["email"];
    $user = $_POST["user"];
    $pass = $_POST["password"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];




    $conn = mysqli_connect("localhost", "root", "password_db", "shoping_db");
   $query = "INSERT INTO `register_data` (frstname , lstname, email, user_id, password, contact, address) 
   VALUES ('$fname', '$lname', '$email', '$user', '$pass', '$contact', '$address')";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Welcome to our shop ");</script>';

        header("location:login.php");
    } else {
        echo "sign up failed";
    }
}



if (isset($_POST["login"])) {


    $email = $_POST["gemail"];

    $password = $_POST["gpassword"];



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

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Document</title>

    <style>
        .login-page {

            padding: 8% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 450px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #2980ef;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form button:hover,
        .form button:active,
        .form button:focus {
            background: #1357ad;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #1357ad;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {

            background-color: #e2e8f0;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .illustration {
            text-align: center;
            padding: 15px 0 20px;
            font-size: 100px;
            color: #2980ef;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

</head>

<body>

    <div class="login-page ">

        <div class="form">
        <a href="index.php" class=" d-flex justify-content-start text-decoration-none" ><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            <form class="register-form"  action="" method="POST">

                <h1>Sign up here</h1>


                <div class="row">


                    <div class="col">
                        <input type="text" placeholder="first name" name="frstname" required />
                    </div>
                    <div class="col">
                        <input type="text" placeholder="last name" name="lstname" required />
                    </div>

                </div>

                <input type="text" name="user" placeholder="create username" required />
                <input type="email" placeholder="email address" name="email" required />

                <input type="password" placeholder="password" name="password" required />
                <input type="number" name="contact" placeholder="Contact no" required max="9999999999" />
                <input type="text" placeholder="address" name="address" required />


                <button type="submit" name="register" value="register">Sign Up</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form"  action="" method="POST">
                <div class="illustration"> <i class="icon ion-ios-locked-outline"></i></div>
                <input type="email" name="gemail" placeholder="email" required>
                <input type="password" name="gpassword" placeholder="password" required />
                
                <button type="submit" name="login" value="register">log in</button>
                <p class="message"><a href="index.php">forget password / </a> <a href="#">Create an account</a></p>
            </form>

        </div>
    </div>

    <script>
        $('.message a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        })
    </script>

</body>

</html>