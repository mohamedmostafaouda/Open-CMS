<?php
    if (isset)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to open CMS intsallation</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/register.css">
</head>
<body>
    <h1>Welcome</h1>
    <form id="mainForm"action="register.php" method="post">
        <input class="input" type="text" placeholder="Name">
        <br>
        <input class="input" type="text" placeholder="Username">
        <br>
        <input class="input" type="password" placeholder="Passwrod">
        <br>
        <input class="input" type="password" placeholder="Confirm Passwrod">
        <br>
        <input type="submit" value="Register" class="submit input">
    </form>
</body>
</html>