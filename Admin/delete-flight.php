<?php 
    require('admin-db.php');
    session_start(); 
    if (isset($_GET['flight-name']))
    { 
    $flightname = $_GET['flight-name'];    
    $query    = "DELETE FROM flight WHERE flightname='$flightname'";
    $result = mysqli_query($con, $query);
    echo "Flight deleted"; }
?>