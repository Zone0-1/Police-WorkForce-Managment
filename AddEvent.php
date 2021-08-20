<?php

      include_once('config.php');


      if(isset($_POST['addevent']))
      {

        $event_id=$_POST['event_id'];
        $event_name=$_POST['event_name'];
        $organizer_no=$_POST['organizer_no'];
        $organizer_name=$_POST['organizer_name'];
        $address=$_POST['address'];
        $date_start=$_POST['date_start'];
        $date_end=$_POST['date_end'];
        $description=$_POST['description'];

        $query="INSERT INTO `events`(`event_id`, `event_name`, `organizer_name`, `organizer_no`, `address`, `Date_start`, `Date_end`, `Event_Description`) VALUES('$event_id','$event_name','$organizer_name','$organizer_no','$address','$date_start','$date_end','$description')";

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
    <title>Workforce Managment</title>
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

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                            <h1 class="tm-site-title mb-0">ADMIN</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="PoliceList.php">List 
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                               <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Tasks-->
                                    </a>
                                  <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="Complete_task.html">Completed Tasks</a>
                                        <a class="dropdown-item" href="Pending_task">Pending Tasks</a>
                                        <a class="dropdown-item" href="Edit_task.html">Edit Tasks</a>
                                    </div>-->
                                    <a class="nav-link" href="Edit_task.php">Task</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Events.php">Events</a>
                                </li>

                                <!--<li class="nav-item">
                                    <a class="nav-link" href="accounts.html">Accounts</a>
                                </li>-->
                                 <li class="nav-item">
                                    <a class="nav-link" href="Notification.php">Notification</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Settings
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <!--  <a class="dropdown-item" href="#">Profile</a>-->
                                        <a class="dropdown-item" href="login.php">Logout</a>
                                      <!--  <a class="dropdown-item" href="#">Customize</a>-->
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="login.html">
                                        
                                     <!--   <span>Logout</span>-->
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--row-->
<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <h2 class="tm-block-title mt-3">Add Event</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form  name="myform" action="" method="post" class="tm-login-form" onsubmit="return validateform()">
                                <div class="input-group">
                                    <label for="event_id" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Event Id:</label>
                                    <input name="event_id" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="event_id">
                                </div>
                                <div class="input-group mt-3">
                                    <label for="event_name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Event Name:</label>
                                    <input name="event_name" type="text" class="form-control validate" id="event_name">
                                </div><br>
                                 <div class="input-group">
                                    <label for="organizer_name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label"> Organizer Name:</label>
                                    <input name="organizer_name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="organizer_name">
                                </div><br>
                                <div class="input-group">
                                    <label for="organizer_no" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Organizer Number:</label>
                                    <input name="organizer_no" type="number" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="organizer_no">
                                </div><br>
                                <div class="input-group">
                                    <label for="address" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Address:</label>
                                    <input name="address" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="address">
                                </div><br>
                                     <div class="input-group mt-3">
                                    <label for="date_start" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Date_start:</label>
                                    <input name="date_start" type="Date" class="form-control validate" id="date_start">
                                </div><br>
                                     <div class="input-group mt-3">
                                    <label for="date_end" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Date_end:</label>
                                    <input name="date_end" type="Date" class="form-control validate" id="date_end">
                                </div><br>
                                <div class="input-group mt-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Description:</label><textarea name="description"  id="description" cols="32",row="7">
                                    </textarea>
                                    
                                    <!--<input  type="text" >-->
                                </div><br>

                               <!--  <div class="input-group">
                                    <label for="cpassword" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Confirm Password:</label>
                                    <input name="cpassword" type="Password" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="cpassword">
                                </div><br>
                                <div class="input-group mt-3">
                                    <input type="submit" name="register" value="Register" class="btn btn-primary d-inline-block mx-auto">-->
                                    <!--<button name="addevent" type="submit"  onclick="validateform()">Add Event</button>-->
                                    <input type="submit" name="addevent"></input>
                                </div>
                              <!--  <div class="input-group mt-3">
                                        <center> <p><em>Not have account?<a href="Events.html"> Register Here!</a></em></p></center>

                                </div>-->
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