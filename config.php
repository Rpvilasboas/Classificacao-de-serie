<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "projetophp";
    $con = mysqli_connect($host, $usuario, $senha, $bd);
    if(mysqli_connect_errno()){
        echo "Falha ao conectar-se ao MySQL: " . mysqli_connect_error();
    }


?>