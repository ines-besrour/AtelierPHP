<?php


if(isset($_POST["envoyer"])){
    if(!isset($_COOKIE['voter']) && !isset($_COOKIE['vote']))
    {
        $vote=$_POST['vote'];
        setcookie("vote",$vote,time() + 120);
        setcookie("voter",1,time() + 120);
        echo 'Merci :) Votre vote est Validé';
    }
    else
    {
        $vote=$_COOKIE['vote'];
        $hasVoted=$_COOKIE['voter'];
        echo 'Vous avez deja voter : '.$vote;
    }
}



