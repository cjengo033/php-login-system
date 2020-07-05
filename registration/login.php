<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <title>User Registration</title>
    
</head>
<body>

<div class="header">
    <h2>Login</h2>
</div>

<form action="login.php" method="post">
    <?php include('errors.php');?>
    <div class="input-group ">
        <label>Username:</label>
        <input type="text" name="username">
    </div>

    <br>

    <div class="input-group ">
        <label>Password:</label>
        <input type="password" name="password">
    </div>

    <br>

    <div class="input-group">
        <button type="sumbit" name="login" class="btn">Login</button>
    </div>
    <p>Not yet a member? <a href="register.php">Sign-up</a>
    </p>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>