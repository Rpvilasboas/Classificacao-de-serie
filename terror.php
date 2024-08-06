<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="layout.css">
    <title>PlayFlix</title>

    
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
    <div id="breakfrom"><a href="https://m.media-amazon.com/images/M/MV5BNDQxOGI4ZjItM2NhZC00Y2FhLWEwZTAtZTc2MmJmNzY1MjViXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_FMjpg_UX1000_.jpg">link</a></div>
    <div id="divp2"></br>SINOPSE & INFO</br>
Dos mesmos produtores de Lost, Origem acompanha o casal Jim (Eion Bailey) e Tabitha Matthew (Catalino Sandino Moreno) e seus filhos Julie (Hannah CHeramy) e Ethan (Simon Webster). Durante uma viagem de trailer pelos Estados Unidos, eles se perdem e acabam entrando em uma pequena cidade interiorana no meio-oeste americano. A estrada principal está barrada por uma árvore caída, mas ele encontram um caminho improvisado para passar. A princípio, tudo parece normal, mas, então, eles notam que não conseguem sair do vilarejo. Toda rua que entram leva sempre de volta ao mesmo lugar. Conversando com os outros moradores, eles decobrem que todos também chegaram a cidade da mesma forma e ficaram presos. Para piorar, a noite o lugar é cercado por misteriosas criaturas. Enquanto tentam descobrir o que tem de errado com a cidade, eles percebem que não chegaram até lá por acaso. Cada um dos moradores desavisados foi levado por uma força sobrenatural inexplicável que os prende para sempre nesse assustador lugar.</br></br>

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

<form action="terror.php" method="POST">
    <label>Digite sua nota: </label>
    <select name="n">
        <option value="1">⭐</option>
        <option value="2">⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
    <input type="submit" value="Enviar">
</form> <br>

Fonte: Adoro Cinema</br> Link: <a href="https://www.adorocinema.com/series/serie-28959/">https://www.adorocinema.com/series/serie-28959/</a>
    </div>
    <iframe width="30%" height="350" src="https://www.youtube.com/embed/pDHqAj4eJcM?si=aVZEZvYSM4GMjwsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div id="breakahs"><a href="https://images.justwatch.com/poster/31572982/s592/temporada-1">link</a></div>
    
    <div id="divp2"></br>SINOPSE & INFO</br></br>
Criada por Ryan Murphy, Brad Falchuk e Ian Brennan, American Horror Story é uma série antológica de terror que a cada temporada explora novos contos aterrorizantes. A trama se inspira em temas, formatos e gêneros já conhecidos dos amantes de terror como casas assombradas, pessoas possuídas ou assassinos implacáveis para surpreender o público com cenas chocantes de violência. A cada temporada, a série apresenta um novo enredo com protagonistas carismáticos e vilões sádicos e assustadores cometendo diversos atos impensáveis. Embora seja uma antologia, American Horror Story costuma reutilizar em suas temporadas os mesmos atores intepretando sempre novos personagens. Entre os rostos mais recorrentes da série estão Sarah Paulson, Evan Peters, Lily Rabe, Jessica Lange, Angela Bassett e Kathy Bates.</br></br></br>

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

<form action="terror.php" method="POST">
    <label>Digite sua nota: </label>
    <select name="nn">
        <option value="1">⭐</option>
        <option value="2">⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
    <input type="submit" value="Enviar">
</form> <br>


Fonte: Adoro Cinema</br> Link: <a href="https://www.adorocinema.com/series/serie-10001/">https://www.adorocinema.com/series/serie-10001/</a>

</div>
<iframe width="30%" height="350" src="https://www.youtube.com/embed/reP8VFF3KHU?si=wCongeq4_Tc-tadU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</body>
</html>