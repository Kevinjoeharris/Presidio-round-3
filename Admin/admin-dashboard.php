<!DOCTYPE html>
<html>
<?php
    require('admin-db.php');
    session_start(); 
    ?>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>         
    <fieldset>
    <h1>Add flight</h1>
    <form method="get" id="form" class="validate" action="add-flight.php">
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
        <label for="password-input">Date</label>
        <input type="date" name="date" id="password-input" required />
    </div>
    <div class="form-field">
        <label for=""></label>
        <input type="submit" value="ADD" />
    </div>
    </form>
    </fieldset>
        <fieldset>
    <h1>Delete flight</h1>
    <form method="get" action="delete-flight.php" id="form" class="validate">
    <div class="form-field">
        <label for="full-name">Flight Name</label>
        <input type="text" name="flight-name" id="full-name" placeholder="Flight Name" required />
    </div>
    <div class="form-field">
        <label for=""></label>
        <input type="submit" value="Delete" />
    </div>
    </form>
    </fieldset>
    <fieldset>
        <h1>View bookings</h1>
        <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
    ?>
  
    <form action="display-booking.php">
        <input type="submit" name="button1"
                class="button" value="Button1" />
    </form>

    </fieldset>
</body>
</html>