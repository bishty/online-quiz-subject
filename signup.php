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

        <form method="post">
            <h2 style="font-family: 'Lobster', cursive;">Signup</h2>
            <label for="name">NAME</label>
            <input type="name" id="name" name="name"><br>
            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password"><br>
            <label for="phone">PHONE</label>
            <input type="number" id="number" name="number">
        </form>
        <button class="button" id="signbtn">Signup</button>
    </div>
</body>


<script>
    $(document).ready(function() {
        $("#signbtn").click(function() {
            var name = $("#name").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var number = $("#number").val();
            if ($("#name").val() != "") {
                $.ajax({
                    type: 'post',
                    url: 'helper/helper.php',
                    data: {
                        action: 'signup',
                        name: name,
                        email: email,
                        password: password,
                        number: number
                    },
                    success: function(data) {
                      
                        window.open('login.php');
                    }
                })
            } else {
                alert("please fill all the fields");
            }
        });
    });


    $(document).ready(function() {
        $("#email").change(function() {
            var email = $("#email").val();
            var password = $("#password").val();
            $.ajax({
                type: 'post',
                url: 'helper/helper.php',
                action: 'emailcheck',
                data: {
                    email: email,
                    password: password,
                    action: 'emailcheck'
                },
                success: function(data) {

                    if (data == 1) {
                        alert("alredy exist");
                    } else if (data == 0) {
                        alert("continue your process");
                    }
                },
                error: function(data) {
                    alert(data);
                }
            });
        });

    });
</script>

</html>