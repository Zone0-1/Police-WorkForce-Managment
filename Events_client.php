<?php
    include_once('config.php');
    session_start();

    if(isset($_POST['volunter']))
    {
        $name=$_SESSION['name'];
       // $event_name=$_POST['hidden1'];
        
    

        $query="INSERT INTO `volunter`(`name`) VALUES ('$name')";
        $run=mysqli_query($conn,$query);

         if($run)
     {
        ?>
        <script type="text/javascript">alert("Application Submitted")</script>
        <?php
     }
   
   }
    else
        echo "error".mysqli_error($conn);

    




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
                                <h2 class="tm-block-title d-inline-block">Event List</h2>
                             

                            </div>
                           
                        </div>
                         <form  name="myform" action="Events.php" method="post" class="tm-login-form">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
                                       <!-- <th scope="col">&nbsp;</th>-->
                                        <!--<th scope="col">Event Id</th>-->
                                        <th scope="col" class="text-center">Event Name</th>
                                        <th scope="col" class="text-center">Organizer Name</th>
                                        <th scope="col" class="text-center">Organizer Number</th>
                                        <th scope="col" class="text-center">Address</th>
                                        <th scope="col" class="text-center">Date-start</th>
                                        <th scope="col" class="text-center">Date-end</th>
                                        <th scope="col" class="text-center">Description</th>

                                       <!-- <th scope="col" class="text-center">Volunter</th>-->
                                       <!-- <th scope="col">&nbsp;</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                          include_once('config.php');
                                          $querry="SELECT * FROM events";
                                          $result=mysqli_query($conn,$querry);
                                          if($result->num_rows!=0)
                                          {
                                           while($row=$result->fetch_array())
                                           {
                                                    $event_name=$row['event_name'];
                                                    $organizer_name=$row['organizer_name'];
                                                    $organizer_no=$row['organizer_no'];
                                                    $address=$row['address'];
                                                    $date_start=$row['date_start'];
                                                    $date_end=$row['date_end'];
                                                    $event_description=$row['event_description'];
                                         ?>

                                                     <tr>
                                                     <!--   <th scope="col">&nbsp;</th>-->
                                                    <td class="tm-product-name"><?php echo $event_name;?></td>
                                                    <td class="text-center"><?php echo $organizer_name;?></td>
                                                     <td class="text-center"><?php echo $organizer_no;?></td>
                                                     <td class="text-center"><?php echo $address;?></td>
                                                     <td class="text-center"><?php echo $date_start;?></td>
                                                     <td class="text-center"><?php echo $date_end;?></td>
                                                     <td class="text-center"><?php echo $event_description;?></td>
                                                    <!-- <td class="text-center"><input type="hidden" name="hidden1" value="<?php echo $row['event_name'];?>"></td> 
                                                     <td class="text-center">
                                                        
                                                        <input type="submit" name="volunter" value="volunter"></td>  
                                                     <th scope="col">&nbsp;</th>  -->
                                                     
                                                     </tr>
                                                   <?php                                                                 

                                           }

                                          }


                                    ?>
                                </form>
                                 <!--   <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">1. In malesuada placerat (hover)</td>
                                        <td class="text-center">145</td>
                                        <td class="text-center">255</td>
                                        <td>2018-10-28</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">2. Aenean eget urna enim. Sed enim</td>
                                        <td class="text-center">240</td>
                                        <td class="text-center">260</td>
                                        <td>2018-10-24</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">3. Vivamus convallis tincidunt nisi</td>
                                        <td class="text-center">360</td>
                                        <td class="text-center">440</td>
                                        <td>2019-02-14</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">4. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">5. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">6. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">7. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" aria-label="Checkbox">
                                        </th>
                                        <td class="tm-product-name">8. Donec semper massa eget</td>
                                        <td class="text-center">445</td>
                                        <td class="text-center">655</td>
                                        <td>2019-03-22</td>
                                        <td><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                    </tr>-->
                                </tbody>
                            </table>
                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-left">
                              <!--  <button class="btn btn-danger">Delete Selected Items</button>-->
                            </div>
                          <!--  <div class="tm-table-actions-col-right">
                                <span class="tm-pagination-label">Page</span>
                                <nav aria-label="Page navigation" class="d-inline-block">
                                    <ul class="pagination tm-pagination">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <span class="tm-dots d-block">...</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    </ul>
                                </nav>
                            </div>-->
                        </div>
                    </div>
                </div>

               <!-- <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title d-inline-block">Product Categories</h2>
                        <table class="table table-hover table-striped mt-3">
                            <tbody>
                                <tr>
                                    <td>1. Cras efficitur lacus</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                                <tr>
                                    <td>2. Pellentesque molestie</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                                <tr>
                                    <td>3. Sed feugiat nulla</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                                <tr>
                                    <td>4. Vestibulum varius arcu</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                                <tr>
                                    <td>5. Aenean eget urna enim</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                                <tr>
                                    <td>6. Condimentum viverra</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                                <tr>
                                    <td>7. In malesuada</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                                <tr>
                                    <td>8. Placerat</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                                <tr>
                                    <td>9. Donec semper</td>
                                    <td class="tm-trash-icon-cell"><i class="fas fa-trash-alt tm-trash-icon"></i></td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="#" class="btn btn-primary tm-table-mt">Add New Category</a>
                    </div>
                </div>
            </div>
            <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                        Copyright &copy; 2018 Admin Dashboard . Created by
                        <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>