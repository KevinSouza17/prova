<?php
    $paragrafos = $_POST['paragrafos'];
    $conteudo = $_POST['conteudo'];
    $lista = $_POST['lista'];
    $itens = $_POST['itens'];

    $contadro = 0+1;

    if ($paragrafos <= 20) {
        while ($contadro <= $paragrafos) {
            $contadro++;

            echo"parágrafo$contadro: $conteudo <br>";
            
        }
    }else {
        echo "Muitos parágrafos gerados";
    };
    
    $qi = 0+1;

    if ($itens <=50) {
        while ($qi <= $itens ) {
            $qi++;
           echo "texto da lista$qi:$lista<br>";
        }
    }else {
        echo "lista extensa";
    };


?>