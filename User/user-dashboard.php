<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
        <fieldset>
            <h1>Available Flights:</h1>
            <?php 
                require('db.php'); 
                $query    = "SELECT * from flight";
                $result = mysqli_query($con, $query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "Flight Name:" . $row["flightname"] . "\n";
                        echo "\nFlight no:" . $row['flightno'];
                        echo "\nTime" .$row["timee"];
                        echo "\nDate:" . $row['datee'];
                        echo "\nNo of seat available:" . $row['seat'];
          //echo "Name" . $row["name"]. "-Email" . $row["email"]. "-Flight number" . $row["flightnum"] .$row["noofseat"];
                    } 
                }
            ?>
        </fieldset>
    <fieldset>
        <h1>Search flight</h1>
        <form method="get">
            <label>Search flights by date(Select date)</label>
            <input type="date" name="search" placeholder="Search Flights by date" required>
            <input type="submit" name="submit" value="Search ">
        </form>
        <?php
            require('db.php');
            if (isset($_GET['search'])){
            $searchdate = $_GET['search'];
            $querryy    = "SELECT * from flight where datee='$searchdate'";
            $resulttt = mysqli_query($con, $querryy);
            if ($resulttt->num_rows > 0) {
                while($rooww = $resulttt->fetch_assoc()) {
                    echo "Flight Name:" . $rooww["flightname"] . "\n";
                    echo "\nFlight Number:" . $rooww['flightno'];
                    echo "\nTime" .$rooww["timee"];
                    echo "\nDate:" . $rooww['datee'];
                    echo "\nNo of seats available:" . $rooww['seat'];
                }
            }}
        ?>
    </fieldset>
    <fieldset>
        <h1>Book flight</h1>
        <form action="bookflight.php" method="get">
            <label>Enter the flight number which u want to book</label>
            <input type="number" name="bookflight" placeholder="Enter the flight number which u want to book">
            <label>No of seats</label>
            <input type="number" name="numofseats" placeholder="Number of seats">
            <input type="submit" name="submit" value="Book">
        </form>
    </fieldset>
    <fieldset>
        <h1>My Bookings</h1>
        <?php 
            require('db.php');  
            $user = $_SESSION["username"];
            $queryy    = "SELECT * from booking where name='$user'";
            $resultt = mysqli_query($con, $queryy);
            if ($resultt->num_rows > 0) {
                while($roww = $resultt->fetch_assoc()) {
                    echo "Name:" . $roww["name"] . "\n";
                    echo "\nFlight number" .$roww["flightnum"];
                    echo "\nNumber of seat:" . $roww['noofseat'];
          //echo "Name" . $row["name"]. "-Email" . $row["email"]. "-Flight number" . $row["flightnum"] .$row["noofseat"];
        } }
?>
    </fieldset>
</body>
</html>