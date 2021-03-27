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

    include_once 'header.php'; ?>
    <div class="boxxx">
        <form id="masterform"></form>  
      </div>
    </body>
<script>
    $(document).ready(function() {
        getquestion();
    });

    function getquestion() {
        $.ajax({
                 type: 'post',
                 url: '../helper/helper.php',
                 data: {
                 action: 'masterdata',

            },
            success: function(data) {
                console.log(data);
                let da = JSON.parse(data);
               
                for (let i = 0; i < da.length; i++) {
                     $("#masterform").append("<h1>"+da[i]['question']+"</h1><br><input type='radio'   name='option1' value='option1'><label>"+da[i]['option1']+"</label><br><input type='radio'    name='option1'  value='option2'><label>"+da[i]['option2']+"</label><br><input type='radio'  name='option1'  value='option3'><label>"+da[i]['option3']+"</label><br><input type='radio'  name='option1' ' value='option4'><label>"+da[i]['option4']+"</label><br><input type='hidden'   name='option5' value='option1'><br>");
       
                }
            }
        });

    }
</script>

</html>