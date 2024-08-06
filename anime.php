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

    <div id="breakbaal"><a href="https://upload.wikimedia.org/wikipedia/pt/7/74/Dragon_Ball_Super_Key_visual.jpg">link</a></div>

    <div id="divp2"><br>SINOPSE & INFO<br><br>
        Depois de finalmente destruir Majin Boo, Goku retornou para a sua vida normal e a Terra pode novamente experimentar a paz. Mas a missão dele está longe de ter acabado: agora o Kakaroto precisará defender o planeta de destrutivas e altamente perigosas, inclusive de universos paralelos. <br> <br>

        <?php 
    if(isset($_POST['nnn'])){
        $nota = $_POST['nnn'];
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

<form action="anime.php" method="POST">
    <label>Digite sua nota: </label>
    <select name="nnn">
        <option value="1">⭐</option>
        <option value="2">⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
    <input type="submit" value="Enviar">
</form> <br>

    Fonte: Adoro Cinema <br>
    Link: <a href="https://www.adorocinema.com/series/serie-19264/">https://www.adorocinema.com/series/serie-19264/</a>
    
    
    </div>

        

    <iframe width="34%" height="350" src="https://www.youtube.com/embed/HNY3rlgfxvA?si=Js88LWviBVfjYGRX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    <div id="breakone"><a href="https://img.assinaja.com/assets/tZ/004/img/262707_520x520.jpg">link</a></div>

    <div id="divp2"><br>SINOPSE & INFO <br>
        À primeira vista, Saitama parece uma pessoa comum e pode passar despercebido por todos. Apesar da fachada inexpressiva, ele tem um hobby bem diferente da maioria. Saitama é um super-herói e treinou arduamente por três anos para chegar ao nível máximo de excelência nessa difícil tarefa. Treinou tanto que, no processo, perdeu todos os pelos do corpo. Ele é absurdamente poderoso, a ponto de nenhum vilão ser capaz de derrotá-lo em uma batalha, podendo vencer seus inimigos com apenas um soco. No entanto, Saitama se encontra entediado, visto que agora, com tanto poder acumulado, ele não sente mais adrenalina em ser um herói e salvar vidas. As coisas começam a mudar quando Genos, um ciborgue de 19 anos, deseja ser orientado por ele. O jovem propõe que os dois entrem para uma associação de super-heróis, para que suas contribuições sejam reconhecidas pela sociedade. Saitama concorda, apesar de excêntrico, tudo que deseja é voltar a sentir empolgação em derrotar vilões e, quem sabe, ganhar a fama que merece. <br> <br>
    
        <?php 
    if(isset($_POST['nnnn'])){
        $nota = $_POST['nnnn'];
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

<form action="anime.php" method="POST">
    <label>Digite sua nota: </label>
    <select name="nnnn">
        <option value="1">⭐</option>
        <option value="2">⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
    <input type="submit" value="Enviar">
</form> <br>

    Fonte: Adoro Cinema <br>
    Link: <a href="https://www.adorocinema.com/series/serie-20669/">https://www.adorocinema.com/series/serie-20669/</a>
    
    </div>

    <iframe width="34%" height="350" src="https://www.youtube.com/embed/Poo5lqoWSGw?si=jN1vStUccV9BWwTK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


</body>
</html>