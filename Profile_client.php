<?php session_start();?>
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
                            <h1 class="tm-site-title mb-0">Police Id:<?php  echo $_SESSION['registration_id'];?></h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="Edit_task.php">Task
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
                                    <a class="nav-link" href="Events.php">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Leave.php">Apply for Leave</a>
                                </li>

                                <!--<li class="nav-item">
                                    <a class="nav-link" href="accounts.html">Accounts</a>
                                </li>-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Settings
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <!--  <a class="dropdown-item" href="#">Profile</a>-->
                                        <a class="dropdown-item" href="Profile.php">Profile</a>
                                        <a class="dropdown-item" href="login.php">Logout</a>
                                      <!--  <a class="dropdown-item" href="#">Customize</a>-->
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="login.php">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                     <!--   <span>Logout</span>-->
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div> 
            <!-- row -->
            <center>
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block"></h2>
                             <!--   <button type="button" >
                                    Add Event
                                </button>-->

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                              <!--  <a href="add-product.html" class="btn btn-small btn-primary">Edit Police Details</a>-->
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                     <?php
                                          include_once('config.php');
                                $querry="SELECT * FROM `registration` WHERE  registration_id='".$_SESSION['registration_id']."' ";
                                          $result=mysqli_query($conn,$querry);
                                          if($result->num_rows!=0)
                                          {
                                           while($row=$result->fetch_array())
                                           {
                                                    $registration_id=$row['registration_id'];
                                                    $name=$row['name'];
                                                    $mobile_no=$row['mobile_no'];
                                                    $email_id=$row['email_id'];
                                                    $address=$row['address'];
                                                   // $date_end=$row['date_end'];
                                         ?>
                                    <tr class="tm-bg-gray">
                                     <div class="input-group">
                                    <label for="police_id" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Police Id:</label><?php echo $registration_id; ?>
                                   
                                </div>
                                <div class="input-group mt-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Name:</label>
                                    <?php echo $name; ?>
                                </div><br>
                                 <div class="input-group">
                                    <label for="mobile_no" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Mobile No:</label><?php echo $mobile_no; ?>
                                    
                                </div><br>
                                <div class="input-group">
                                    <label for="email_id" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Email Id:</label><?php echo $email_id; ?>
                                   
                                </div><br>
                                <div class="input-group">
                                    <label for="address" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Address:</label><?php echo $address; ?>

                                    <?php
                                }

                            }
                            
                            ?>
                                    
                                </div><br>

                                         
                                    </tr>
                                </thead>
                                <tbody>
                                 
</body>

</html>