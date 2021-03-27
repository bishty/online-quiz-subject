
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/header.css">
    <title>Document</title>
</head>

<body>
<?php
include_once 'layout/header.php';
?>
    <div id="main1">

        <form>
            <h2 style="font-family: 'Lobster', cursive;">Login page</h2>
            <label for="email">Email</label>
            <input type="email" id="email" name="email"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="email">

        </form>
        <button class="button" id="submit">Login</button>
        <a href="forgetpassword.php">Forgetpassword?</a>
    </div>
</body>
<script>
    $(document).ready(function() {
        $("#submit").click(function(e) {
            e.preventDefault();
            var email = $('#email').val();
            var password = $("#password").val();
            $.ajax({
                type: "post",
                url: 'helper/helper.php',
                data: {
                    email: email,
                    action: 'logincheck',
                    password: password,
                },
                success: function(data) {
                    console.log(data);
                    if (data == 1) {
                        alert("welcome to user dashboard");
                        location.replace("user/dashboard.php");
                    } else if (data == 0) {
                        $("#alert").html("Invalid");
                        $("#email").val("");
                        $("#password").val("");
                    } else if (data == 2) {
                        alert("HII ADMIN WHATSUP")
                        location.replace("admin/dashboard.php");
                    } else {
                        alert("you are blocked");
                    }

                }

            });
        });
         });


</script>

</html>