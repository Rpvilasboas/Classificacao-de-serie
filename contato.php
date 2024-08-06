<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="layout.css">
    <title>PlayFlix</title>
    <style>
        input[type="submit"]{
				background-color: black;
				color: white;
				border-radius: 15%;
				width: 40%;}

        input{
				background-color: gray;
				border-radius: 15%;
				width: auto;
				padding: 6px;
				border: 2px solid black;
				display: inline-block;
				color: white;
				text-align: center;}   
                
        input[name= "mensagem"]{
				background-color: gray;
				border-radius: 15%;
				width: 300px;
                height: 100px;
				padding: 6px;
				border: 2px solid black;
				display: inline-block;
				color: white;
				text-align: left; }       

    </style>
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
        

            <h2>Formulário de Contato</h2>

        <form action="mensagem.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" required><br>

        <label for="email">E-mail:</label><br>
        <input type="text" name="email" required><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" required><br>

        <label for="mensagem">Mensagem:</label><br>
        <input type="text" name="mensagem" required> <br>
        <input type="submit" value="Enviar">
        </form>        
        

    </div>
</body>    
</html>