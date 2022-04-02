<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" >
    <link rel="stylesheet" href="node_modules/bootswatch/dist/slate/bootstrap.css">
    <title>Title</title>
</head>
<body>
<div class="container mt-4">
<form method="post" action="index.php">

    <h4 class="h4">queller votre évaluation du contenu du cours PHP :</h4>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="vote" id="exampleRadios1" value="Bon">
        <label class="form-check-label" for="exampleRadios1">
            Bon
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="vote" id="exampleRadios2" value="Moyen">
        <label class="form-check-label" for="exampleRadios2">
            Moyen
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="vote" id="exampleRadios3" value="Mauvais">
        <label class="form-check-label" for="exampleRadios3">
            Mauvais
        </label>
    </div>
    <button type="submit" class="btn btn-primary mt-4" name="envoyer"> Envoyer </button>
</form>
</div>
</body>
