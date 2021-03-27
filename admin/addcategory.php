<?php

include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>

<body>
    <div id="main5">

        <form>
            <h2 style="font-family: 'Lobster', cursive;">Add Subject</h2>

            <input type="text" id="addsubject" name="addsubject" placeholder="Enter subject"><br>
        </form>

        <button class="button" id="subjectbtn">Add subject</button>

    </div>
</body>
<script>
    $(document).ready(function() {
        $("#subjectbtn").click(function() {
            var addsubject = $("#addsubject").val();
            console.log( addsubject);
            if (addsubject != "") {
                $.ajax({
                    type: 'post',
                    url: '../helper/helper.php',
                    data: {
                        action: 'addsubject',
                        addsubject: addsubject
                    },
                    success: function(data) {

                        if (data == 1) {
                            alert("Succesfully added");
                            window.open('addquestion.php');
                        } else {
                            alert("Invalid");
                        }
                    }
                });
            } else {
                alert("Invalid");
            }
        });
    });
</script>

</html>