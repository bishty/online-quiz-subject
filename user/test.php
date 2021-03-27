<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include_once 'header.php';
    ?>
    <div class="box1">

    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $.ajax({
            type: 'post',
            url: '../helper/helper.php',
            action: 'startquiz',
            data: {
                action: 'startquiz',
            },
            success: function(data) {
                console.log(data);
                let dd = JSON.parse(data);
                for (i = 0; i < dd.length; i++) {
                    $(".box1").append("<div class='box'><h1>" + dd[i]['subj_name'] + "</h1><button onclick='startest(" + dd[i]['id'] + ")'>StartQuiz </button></div>");
                }

            }

        });
    });

    function startest(e) {
        $.ajax({
            type: 'post',
            url: '../helper/helper.php',
            action: 'startest',
            data: {
                action: 'startest',
                e: e
            },
            success: function(data) {
                console.log(data);
                let da = JSON.parse(data);
                window.open('master.php');
            }
        });

    }
</script>