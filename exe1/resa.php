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
<div class="container mt-4" >
    <h1>Formulaire</h1>
    <form method="post" action="recap.php" >
        <label for="nom">Entrez votre nom</label>
        <input type="text" class="form-control" id="nom" placeholder="besrour" name="nom">

        <label for="prenom">Entrez votre prenom</label>
        <input type="text" class="form-control" id="prenom" placeholder="ines" name="prenom">

        <label for="email">Entrez votre mail</label>
        <input type="email" class="form-control" id="email" placeholder="ines.besrour@insat.ucar.tn" name="email">

        <label for="nbre">Nombre de Sandwitch</label>
        <input type="number" class="form-control" id="nbre" placeholder="1" name="nbre">

        <label for="adresse">adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse">

        <label for="type">Type</label>
        <select class=form-control id="type">
            <option value=un>Viande</option>
            <option value=deux>Escalope</option>
            <option value=trois>Poulet</option>
        </select>

        <label class="mt-2">Vous voulez ajouter :</label>
        <div class="form-check" >
            <input class="form-check-input" type="checkbox" value="" id="sauce" >
            <label class="form-check-label" for="sauce">
                sauce barbecue
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="mayonnaise">
            <label class="form-check-label" for="mayonnaise">
                Mayonnaise
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="harissa">
            <label class="form-check-label" for="harissa">
                Harissa
            </label>
        </div>
        <div>
            <label class="form-check-label mt-2">Votre Cin</label> :
            <input type="file" name="image"><br>
        </div>
        <input class="btn btn-primary mt-4" type="submit" value="Envoyer">
    </form>
</div>
</body>
</html>
