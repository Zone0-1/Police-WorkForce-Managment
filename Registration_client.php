<?php
        session_start();

      include_once('config.php');
      

      if(isset($_POST['register']))
      {

        $police_id=$_POST['police_id'];
        $name=$_POST['name'];
        $mobile_no=$_POST['mobile_no'];
        $email_id=$_POST['email_id'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        //$cpassword=$_POST['cpassword'];

        $query="insert into registration(registration_id,name,mobile_no,email_id,address,password)values('$police_id','$name','$mobile_no','$email_id','$address','$password')";

        $run=mysqli_query($conn,$query);

        if($run)
       {     
          ?>  
            <script type="text/javascript"> alert("Data inserted");</script>
            <?php
       }    
      
     else 
     {
        echo "error".mysqli_error($conn);
          # code...
    }


      }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:Registration Page:</title>
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
                            <h2 class="tm-block-title mt-3">Register</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form  name="myform" action="" method="post" class="tm-login-form" onsubmit="return validateform()">
                                <div class="input-group">
                                    <label for="police_id" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Police Id:</label>
                                    <input name="police_id" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="police_id">
                                </div>
                                <div class="input-group mt-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Name:</label>
                                    <input name="name" type="text" class="form-control validate" id="name">
                                </div><br>
                                 <div class="input-group">
                                    <label for="mobile_no" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Mobile No:</label>
                                    <input name="mobile_no" type="number" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="mobile_no">
                                </div><br>
                                <div class="input-group">
                                    <label for="email_id" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Email Id:</label>
                                    <input name="email_id" type="Email" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="email_id">
                                </div><br>
                                <div class="input-group">
                                    <label for="address" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Address:</label>
                                    <input name="address" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="address">
                                </div><br>
                                     <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="password" type="password" class="form-control validate" id="password">
                                </div><br>
                                 <div class="input-group">
                                    <label for="cpassword" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Confirm Password:</label>
                                    <input name="cpassword" type="Password" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="cpassword">
                                </div><br>
                                <div class="input-group mt-3">
                                   <input type="submit" name="register" value="Register" class="btn btn-primary d-inline-block mx-auto">
                                   <button name="register" type="submit"  onclick="validateform()"></button>
                                </div>
                                <div class="input-group mt-3">
                                        <center> <p><em>Already have an account<a href="login.php"> Login!</a></em></p></center>

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
    <script type="">
        function validateform() {
            // body...
            var x=document.forms["myform"]["name"].value;
            Hello!
        }
    </script>
</body>

</html>