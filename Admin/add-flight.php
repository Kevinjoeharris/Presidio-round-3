<?php 
    require('admin-db.php');
    session_start(); 
    if (isset($_GET['flight-name']))
    {   $flightname = $_GET['flight-name'];    
        $flightno = $_GET['flight-no'];
        $time = $_GET['time'];
        $seat = '60';
        $date = $_GET['date'];
    $query    = "INSERT into flight (flightname,flightno,timee,datee,seat) VALUES ('$flightname','$flightno','$time','$date','$seat')";
    $result = mysqli_query($con, $query);
    echo "Flight added";
}
?>