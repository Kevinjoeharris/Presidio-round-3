<?php 
    require('admin-db.php');
    session_start();  
    $query    = "SELECT *  from booking";
    $result = mysqli_query($con, $query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "Name:" . $row["name"] . "\n";
          echo "\nFlight number" .$row["flightnum"];
          echo "\nNumber of seat:" . $row['noofseat'];
          //echo "Name" . $row["name"]. "-Email" . $row["email"]. "-Flight number" . $row["flightnum"] .$row["noofseat"];
        } }
?>