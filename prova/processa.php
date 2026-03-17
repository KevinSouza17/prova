<?php
$paragrafos = $_POST['paragrafos'];
$conteudo = $_POST['conteudo'];
$lista = $_POST['lista'];
$itens = $_POST['itens'];

$contador = 1;

if ($paragrafos <= 20) {
    echo "<ul>";
    while ($contador <= $paragrafos) {
        echo "<li>Parágrafo $contador: $conteudo</li>";
        $contador++;
    }
    echo "</ul>";
} else {
    echo "Muitos parágrafos gerados <br>";
}

$qi = 1;

if ($itens <= 50) {
    echo "<ul>";
    while ($qi <= $itens) {
        echo "<li>Item $qi: $lista</li>";
        $qi++;
    }
    echo "</ul>";
} else {
    echo "Lista extensa";
}
?>