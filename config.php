<?php
    $dbHost='localhost';
    $dbUser='root';
    $dbPassword='';
    $dbName='police_workforce_managment';

    //create connnection

    $conn=mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);

    //check connection

    if(!$conn)
    {
    	die("connection failed".mysqli_connect_erro());

    }
    else
    // print "complete ".$conn;
   

?>
