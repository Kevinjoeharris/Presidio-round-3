<?php 
    require('admin-db.php');
    session_start(); 
    if (isset($_GET['flight-name']))
    {   $flightname = $_GET['flight-name'];    
        $flightno = $_GET['flight-no'];
        $time = $_GET['time'];
        $seat = '60';
    $query    = "INSERT into flight (flightname,flightno,timee,seat) VALUES ('$flightname','$flightno','$time','$seat')";
    $result = mysqli_query($con, $query);
    echo "Flight added";
}
?>