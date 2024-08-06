<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagem</title>
    <link rel="stylesheet" href="layout.css">
</head>
<body>
        <div id="divprincipal"><a href="menuinicial.php"> <b>Ranking de melhores séries</b></a></div>
        
        <a href="index.php"><div>Login (index)</div></a>

        <a href="menuinicial.php">
        <div>Menu Inicial</div></a>
        
        <a href="acao.php">    
        <div>Ação</div>
        </a>
        <a href="terror.php">
        <div>Terror</div>
        </a>
        <a href="anime.php">
        <div>Animação</div>
        </a>
        <a href="contato.php">
        <div>Contato</div>
        </a>
        <a href="membros.html">
        <div>Membros</div>
        </a>

        <div id="divconteudo">
            <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $mensagem = $_POST['mensagem'];

            echo "<br>" . "<br>" . "Obrigado $nome, por entrar em contato conosco." . "<br>" . "A sua mensagem foi enviada com sucesso." . "<br>";
            echo "E-mail: $email" . "<br>";
            echo "Telefone: $telefone" . "<br>";
            echo "Mensagem: $mensagem" . "<br>";
            ?>

            <a href="contato.php">Voltar</a>
        </div>
</body>
</html>

