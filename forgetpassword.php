<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="layout/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include_once 'layout/header.php';
?>
<div id="main1">
    
    <form>
        <h2 style="font-family: 'Lobster', cursive;">Reset your password</h2>
  
        <label for="email"> Enter-Email</label>
            <input type="email" id="enteremail" name="email"><br>
            <label for="password"> Create New Password</label>
            <input type="password" id="newpassword" name="password"><br>
            <label for="password">password again</label>
            <input type="number" id="phone" name="phone">
    </form>
    <button class="button">Reset</button>

</div>
</body>
</html>