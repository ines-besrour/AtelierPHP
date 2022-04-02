<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" >
    <link rel="stylesheet" href="node_modules/bootswatch/dist/quartz/bootstrap.css">
    <title>Title</title>
</head>
<body class="mt-4">
<div class="container">
    <div >
        <h4 class="h4">Add Note :</h4>
    </div>
    <form action="note.php" method=POST>
        <input class="border-1" name="note" type=text /> <button class="btn" type=submit>Add</button>
    </form>

    <?php
    if(isset($_SESSION['notes'])) {
        foreach($_SESSION['notes'] as $note){
            ?>
            <div>
                <?=$note?>
            </div>
            <?php
        }
    }
    else {
        echo "<b>You don't have any notes, start by adding one!</b>";
    }
    ?>
</div>

</body>
</html>