<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $salario = $_POST['salario'];
    $salario_minimo = 1412;
    $limite = $salario_minimo * 2;
    if ($salario <= $limite) {
        $desconto = $salario * 0.08;
    } else {
        $desconto = $salario * 0.10;
    }
    $salario_liquido = $salario - $desconto;
    echo '<p>Salario Liquido: R$ ' . number_format($salario_liquido, 2, ',', '.') . '</p>';
}
?>