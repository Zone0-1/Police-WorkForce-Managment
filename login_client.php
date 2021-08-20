<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <h2 class="tm-block-title mt-3">Login</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form  method="post" class="tm-login-form">
                                <div class="input-group">
                                    <label for="registration_id" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Registration id:</label>
                                    <input name="registration_id" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="registration_id" >
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="password" type="password" class="form-control validate" id="password" >
                                </div>
                                <div class="input-group mt-3">
                                    <button type="submit" class="btn btn-primary d-inline-block mx-auto" name="login"><a href="">Login</a></button>
                                </div>

                                <?php

                                   include_once('config.php');

                                   if(isset($_POST['login']))
                                   {
                                    $registration_id=$_POST['registration_id'];
                                    $password=$_POST['password'];

                                    session_start();

                                    $result=mysqli_query($conn,"SELECT * FROM registration where registration_id='$registration_id'and password='$password' ");

                                    $row=mysqli_fetch_array($result);

                                    if($row['registration_id']==$registration_id && $row['password']==$password)
                                    {
                                        //echo "Login Sucessfull !! Welcome ".$row['name'];
                                        $_SESSION['registration_id']= $registration_id;
                                        $_SESSION['name']=$row['name'];

                                        //echo  $_SESSION['registration_id'];
                                        header('location:index.php');


                                    }
                                    else
                                       {
             
                                          echo "Login Failed";
                                         //echo '<script>window.location=</script>';
                                         // header("Location: index1.php");

                                        }


                                   }


                                    



                                ?>
                                <div class="input-group mt-3">
                                        <center> <p><em>Not have account?<a href="Registration.php"> Register Here!</a></em></p></center>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
        <!--    <div class="col-12 font-weight-light text-center">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018 Admin Dashboard . Created by
                    <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                </p>
            </div>-->
        </footer>
    </div>
</body>

</html>