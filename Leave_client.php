<?php
  
   session_start();
  include_once('config.php');
  if(isset($_POST['submit']))
  {
     $date_start=$_POST['date_start'];
     $date_end=$_POST['date_end'];
     $reg_id=$_SESSION['registration_id'];
     $querry="INSERT INTO `leave` (`date_start`, `date_end`, `registration_id`) VALUES ('$date_start','$date_end','$reg_id')";
    
     $run=mysqli_query($conn,$querry);

     if($run)
     {
        ?>
        <script type="text/javascript">alert("Application Submitted")</script>
        <?php
     }
   
    else
        echo "error".mysqli_error($conn);


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
                     
                                    </tr>
                                </thead>

                                 
                               <form  name="myform" action="Leave.php" method="post" class="tm-login-form" onsubmit="return validateform()">
                                <div class="input-group">
                                    <label for="date_start" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Date Start:</label>
                                    <input name="date_start" type="Date" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="date_start">
                                </div><br>
                                <div class="input-group">
                                    <label for="date_end" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Date End:</label>
                                    <input name="date_end" type="Date" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="date_end">
                                </div><br>
                                <div class="input-group">
                                    <input type="submit" name="submit" value="submit"></a></input>
                                
                                 </div>
                                 <br>
                                <center>    
                            
                                <a href="check.php">Check if leave is accepted!</a>
                                </center>    

                            </form>
                                <tbody>
                                 
                                </tbody>
                            </table>
                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-left">
                              <!--  <button class="btn btn-danger">Delete Selected Items</button>-->
                            </div>
                         
                        </div>
                    </div>
                </div>

              
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
   </div>
</div>
</body>

</html>