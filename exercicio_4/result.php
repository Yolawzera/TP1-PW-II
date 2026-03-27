<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = $_POST['nota1'];
    $n2 = $_POST['nota2'];
    $n3 = $_POST['nota3'];
    $media = ($n1 + $n2 + $n3) / 3;
    if ($media < 5) {
        $resultado = 'I';
    } elseif ($media < 7) {
        $resultado = 'R';
    } elseif ($media < 9) {
        $resultado = 'B';
    } else {
        $resultado = 'MB';
    }
    echo '<p>Média: ' . number_format($media, 2) . '</p>';
    echo '<p>Resultado: ' . $resultado . '</p>';
}
?>
