<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Management</title>
</head>
<body>
    <h1>Welcome to the App</h1>
    <form action="login_page.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Enter Username">
        <label for="password">Password: </label>
        <input type="password" name='password' placeholder="Enter Password">

        <input type="submit" name='submit' value="Login">
    </form>
</body>
</html>