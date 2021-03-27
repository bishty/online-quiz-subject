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
    <div id="top">
        <div id="main1">
            <div id="adminbox">
                <button class="button"  onclick="location.href = 'addcategory.php'">
                    <h2>Add subject</h2>
                </button>
            </div>
        </div>
        <div id="main2">
            <div id="adminbox">
            <button class="button"  onclick="location.href = 'addquestion.php'">
                    <h2>Add Question</h2>
                </button>
            </div>
        </div>
        <div id="main3">
            <div id="adminbox">
                <button class="button">
                    <h2>Add category</h2>
                </button>
            </div>
        </div>
    </div>
</body>


<script>

    </script>
</html>