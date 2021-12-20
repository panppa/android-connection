<?php
    $dsn="mysql:host=200.18.128.50;dbname=vacineSe;charset=utf8";
    $usuario = "vacinese";
    $senha = "2021@Vacinese";

    try{
        $PDO = new PDO($dsn, $usuario, $senha);

       // echo "<h1>connected</h1>";

    }catch(PDOException $erro){
       // echo "<h1>connection failed</h1>";

    }
    
?>
