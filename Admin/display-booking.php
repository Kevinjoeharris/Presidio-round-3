<?php 
    require('admin-db.php');
    session_start();  
    $query    = "INSERT *  from booking";
    $result = mysqli_query($con, $query);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "Name" . $row["name"]. "-Email" . $row["email"]. "-Flight number" . $row["flightnum"] .$row["noofseat"];
        }
?>