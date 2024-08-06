<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "projetophp";
    $con = mysqli_connect($host, $usuario, $senha, $bd);
    if(mysqli_connect_errno()){
        echo "Falha ao conectar-se ao MySQL: " . mysqli_connect_error();
    }

    $usuario = $_POST['usuario'];
    $nome_usuario = $_POST['nome_usuario'];
    $senha = $_POST['senha'];

    ?>