<?php
    session_start();

    $_SESSION['username1'];
    $_SESSION['userage1'];
    $_SESSION['userweight1'];
    $_SESSION['userheight1'];


    $_SESSION['username2'] = $_POST[ "username2"];
    $_SESSION['userage2'] = $_POST[ "userage2"];
    $_SESSION['userweight2'] = $_POST[ "userweight2"];
    $_SESSION['userheight2'] = $_POST["userheight2"];

    if($_SESSION['userheight1'] > $_SESSION['userheight2']){
        $maisAlto = $_SESSION['username1'] ." é o mais alto" . "<br>";
    }else{
       $maisAlto = $_SESSION['username2'] ." é o mais alto" . "<br>";
    }


    if($_SESSION['userage1'] > $_SESSION['userage2']){
       $maisVelho = $_SESSION['username1'] ." é o mais velho" . "<br>";
    }else{
       $maisVelho = $_SESSION['username2'] ." é o mais velho" . "<br>";
    }

    if($_SESSION['userweight1'] > $_SESSION['userweight2']){
       $maisPesado = $_SESSION['username1'] ."é o mais pesado" . "<br>";
    }else{
       $maisPesado = $_SESSION['username2'] ."é o mais pesado" . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Comparando Dados</title>
</head>
<body>
    <header>
        <h1>COMPARANDO DADOS</h1>
    </header>

    
</body>
</html>