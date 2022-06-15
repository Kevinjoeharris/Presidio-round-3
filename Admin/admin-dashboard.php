<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>         
    <fieldset>
    <h1>Add flight</h1>
    <form method="post" action="/" id="form" class="validate">
    <div class="form-field">
        <label for="full-name">Flight Name</label>
        <input type="text" name="flight-name" id="full-name" placeholder="Flight Name" required />
    </div>
    <div class="form-field">
        <label for="email-input">Flight number</label>
        <input type="number" name="flight-no" id="email-input" required />
    </div>
    <div class="form-field">
        <label for="password-input">Time</label>
        <input type="time" name="time" id="password-input" required />
    </div>
    <div class="form-field">
        <label for=""></label>
        <input type="submit" value="ADD" />
    </div>
    </form>
    </fieldset>
    <?php
    require('admin-db.php');
    session_start(); 

    $flightname = $_GET['flight-name'];    
    $flightno = $_GET['flight-no'];
    $time = $_GET['time'];
    $query    = "INSERT into flight (flightname,flightno,timee) VALUES ('$flightname','$flightno','$time')";
    $result = mysqli_query($con, $query

        ?>
</body>
</html>