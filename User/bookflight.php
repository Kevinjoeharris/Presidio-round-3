<?php 
    require('db.php');
    session_start(); 
    $user = $_SESSION["username"];
    if (isset($_GET['bookflight']))
    {   $flightno = $_GET['bookflight'];
        $numofseat = $_GET['numofseats'];
    $query    = "INSERT into booking (name,flightnum,noofseat) VALUES ('$user','$flightno','$numofseat')";
    $result = mysqli_query($con, $query);
    echo "Flight booked";
    $query2 = "UPDATE flight SET seat = seat - '$numofseat'";
    mysqli_query($con, $query2);
    }
?>