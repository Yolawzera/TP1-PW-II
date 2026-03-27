<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'] / 100;
    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
        echo 'IMC: ' . number_format($imc, 2);
    } else {
        echo 'altura invalida';
    }
}
?>