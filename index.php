<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Login</title>
		<style>
			body{
				background-image: url(imgs/series.png);
				background-size: cover;

			}

			div{
				width: 200px;
				height: 200px;
				background-color: rgba(50, 50, 50, 0.9);
				top: 50%;
				left: 50%;
				position: absolute;
				transform: translate(-50%, -50%);
				text-align: center;
				border-radius: 10%;
				box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;			
			}	

			header {
					width: 200px;
					height: 200px;
					background-color: rgba(100, 0, 0, 0.8);
					float: left;
					box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;	
					text-align: center;
					border-radius: 10%;
					text-shadow:  #000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px;
					color: white;

			}

			form{
				color: white;
				text-shadow:  #000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px;
			}

			input[type="text"]{
				background-color: gray;
				border-radius: 15%;
				width: auto;
				padding: 6px;
				border: 2px solid black;
				display: inline-block;
				color: white;
				text-align: center;
			}

			input[type="password"]{
				background-color: gray;
				border-radius: 15%;
				width: auto;
				padding: 6px;
				border: 2px solid black;
				display: inline-block;
				color: yellow;
				text-align: center;
			}

			input[type="submit"]{
				background-color: black;
				color: white;
				border-radius: 15%;
				width: 40%;
			}

			a{
				text-decoration: none;
    			color: white;
				text-shadow:  #000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px;

			}
				
		</style>
	</head>
	<body>

		<header> <br>
				Professor como nós não conseguimos colocar o banco de dados, segue o Usuário e Senha para ter acesso ao login, Peço que respeite o case sensitive <br/> <br/>
				Usuário: Paulo </br>
				Senha: projeto2023
		</header>

		<div>				
			<?php
					session_start();
					if( isset($_SESSION["logado"]) && $_SESSION['logado'] == "s" ){
						// se a sessão existir E conter o valor "s"
						echo "<br/>" . "<br/>" . "Bem vindo ". $_SESSION["usuario"] .  " ao nosso projeto" . "<br/>" . "<br/>" . "<br/>" . "<br/>";
						echo "<a href='menuinicial.php'>
								Entrar
							</a><br/>";
						
						
						
						
						}else{
							//se a sessão não existir ou o valor dela não for "s"
							if(isset($_SESSION["erro"]) &&	$_SESSION["erro"] != ""){
								echo $_SESSION["erro"] . "<br/>";
								echo "Você ainda não está conectado!<br/>" . "<br/>";

							}
						?>	
							<form action="login.php" method="post">
								Usuário:<br><input type="text" name="usuario" maxlength="20" required>
								<br/>
								Senha: <br> <input type="password" name="senha" required> <br>
								<input type="submit" value="Enviar" maxlength="20" >
							</form>					
						<?php 
						
					}
				?>
		</div>				
	</body>
</html> 
