<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="layout.css">
    <title>PlayFlix</title>
    <style>
        /* Estilização dos botões de rádio */
        input[type=radio] {
         position: relative;
         top: 1px;
         margin-right: 5px;
        }
        
        /* Estilização da estrela */
        .estrella:before {
         content: "★";
         font-size: 16px;
         color: #FFC107;
        }
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
    <div>Animação</div></a>

    <a href="contato.php">
    <div>Contato</div>
    </a>
    <a href="membros.html">
    <div>Membros</div>
    </a>
    <div id="breaksoa"><a href="https://vortexcultural.com.br/images/2014/12/poster-sons-of-anarchy-season-7.jpg">link</a></div>

    <div id="divp2"></br><b>SINOPSE & INFO</b></br></br></br>
Em Charming, uma pequena cidade fictícia no norte da Califórnia, nos Estados Unidos, habita o clube de motociclistas Sons of Anarchy. O grupo lida com atividades ilícitas como o tráfico de drogas e filmes pornô e é liderado por Clay Morrow (Ron Perlman) e Jax Teller (Charlie Hunnam). Além do esforço para conciliar a sua ocupação com a família e os filhos, eles tem de conviver com suas opiniões diferentes: enquanto Morrow opta pela tradição violenta, Teller se inspira no discurso revolucionário do diário de seu pai falecido.</br></br>

<?php 
    if(isset($_POST['n'])){
        $nota = $_POST['n'];
        switch($nota){
            case 1 :
                echo "Muito Ruim";
                break;

            case 2 :
                echo "Ruim";
                break;
                
            case 3 :
                echo "Bom";
                break;
                
            case 4 :
                echo "Muito Bom";
                break;

            case 5 :
                echo "Excelente";
                break;    

        }
    }
?>

<form action="acao.php" method="POST">
    <label>Digite sua nota: </label>
    <select name="n">
        <option value="1">⭐</option>
        <option value="2">⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
    <input type="submit" value="Enviar">
</form> <br>

 Fonte:Adoro Cinema </br>
 Link:<a href="https://www.adorocinema.com/series/serie-3859/">https://www.adorocinema.com/series/serie-3859/</a>

</div>
    <iframe width="30%" height="350" src="https://www.youtube.com/embed/-Nv9YrZr3wE?si=rjn_xtJelsJJcdl-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div id="breakmayans"><a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtIPFVJTMnUTOCG6rG-nP7fPUpHSJigwAH4LTHwraOp5O6HSIQhGAJqBA2V7tL59W1E_M&usqp=CAU">link</a></div>

    <div id="divp2"></br> <b>SINOPSE & INFO</b></br></br></br></br>
Uma gangue de motoqueiros estabelecida no norte da Califórnia tem que se virar para administrar suas fábricas de heroina e redes de prostituição enquanto combate a gangue rival, SAMCRO.</br></br></br></br></br>

<?php 
    if(isset($_POST['nn'])){
        $nota = $_POST['nn'];
        switch($nota){
            case 1 :
                echo "Muito Ruim";
                break;

            case 2 :
                echo "Ruim";
                break;
                
            case 3 :
                echo "Bom";
                break;
                
            case 4 :
                echo "Muito Bom";
                break;

            case 5 :
                echo "Excelente";
                break;    

        }
    }
?>

<form action="acao.php" method="POST">
    <label>Digite sua nota: </label>
    <select name="nn">
        <option value="1">⭐</option>
        <option value="2">⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
    <input type="submit" value="Enviar">
</form> <br>


Fonte: Adoro Cinema</br> Link: <a href="https://www.adorocinema.com/series/serie-20012/">https://www.adorocinema.com/series/serie-20012/</a>

</div>
    <iframe width="30%" height="350" src="https://www.youtube.com/embed/Amh3hJNV8sk?si=Hf1P2wHqdIcYJ29S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>
</body>
</html>