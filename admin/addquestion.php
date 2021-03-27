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
    <?php

    include_once 'header.php';
    ?>

    <div id="top2">
        <div id="main4">

            <form>
                <h2 style="font-family: 'Lobster', cursive;">Add question</h2>
                <label>Subject</label>
                <select id="subjectid">
                    <option>Select subject</option>
                </select><br>
                <label for="Question">Question</label>
                <input type="text" id="question" name="question"><br>
                <label for="option1">Option1</label>
                <input type="text" id="option1" name="option1"><br>
                <label for="option1">Option2</label>
                <input type="text" id="option2" name="option1"><br>
                <label for="option1">Option3</label>
                <input type="text" id="option3" name="option1"><br>
                <label for="option1">Option4</label>
                <input type="text" id="option4" name="option1"><br>
                <label>Correct Answer</label>
                <select>
                    <option>Correct Answer</option>
                </select><br>
                <button class="button">ADD QUESTION</button>
            </form>


        </div>

    </div>
    <script>
    ///////drop down////////////
        $(document).ready(function() {
            $.ajax({
                type: 'post',
                url: '../helper/helper.php',
                action: 'dropdown',
                data: {
                    action: 'dropdown',
                },
                success: function(data) {
                    let da = JSON.parse(data);
                    for (i = 0; i < da.length; i++) {
                        $("#subjectid").append("<option>" + da[i]['subj_name'] + "</option>")
                    }
                }

            });
        });
/////////////insert question into data base/////////////
$()



    </script>
</body>

</html>