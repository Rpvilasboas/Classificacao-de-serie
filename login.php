
<?php
	session_start();
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	if($usuario === "Paulo" && $senha === "projeto2023"){
		$_SESSION['logado'] = 's';
		$_SESSION['usuario'] = $usuario;
		$_SESSION['erro'] = ""; 
	}else{
		$_SESSION['erro'] = "Login ou senha incorretos";
	}
	header("Location: index.php");
	//redirecionamento em php
	//só funciona em páginas em branco

?>
