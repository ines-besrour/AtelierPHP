<?php
print_r(@$_FILES['cin']);
@$file=@$_FILES['cin'];
@$fileName=$file['name'];

if (@$_POST['nbre'] > 500) {
    header('location: alert.php');
}
include_once ('Cin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/pulse/bootstrap.css">
    <title>Title</title>
</head>
<body>
<?php

if($_POST["nom"]!=null &&$_POST["prenom"]!=null &&$_POST["email"]!=null &&$_POST["nbre"]!=null &&$_POST["adresse"]!=null ){
    @$nbre=$_POST["nbre"];
    if($nbre<10){
        $prix=$nbre*4;
        ?>  <div class="container mt-4" >
            <p class="font-monospace h5"><?php echo "Vous avez commandé : ".$nbre." Sandwitch";?></p>
            <br>
            <h2 class="h3"><?php echo "le prix de votre commande est : ".$prix."DT";?></h2>
        </div>
        <?php
    }

    else{
        $prix=$nbre*4*90/100;
        ?>  <div class="container mt-4" >
            <p class="font-monospace h5"><?php echo "Vous avez commandé : ".$nbre." Sandwitch";?></p>
            <br>
            <h2 class="h3"><?php echo "le prix de votre commande est : ".$prix."DT";?></h2>
        </div>
        <?php
    }}
else{
    ?>  <div class="container mt-4" >
            <h2 class="h2"><?php echo "Vous devez remplir tout les champs du formulaire !";?></h2>
        </div>
    <?php
}
?>


</body>
