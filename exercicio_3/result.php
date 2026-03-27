<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor = $_POST['valor'];
    $dolar = 5.00;
    $euro = 5.45;
    $libra = 6.35;
    $conv_dolar = $valor / $dolar;
    $conv_euro = $valor / $euro;
    $conv_libra = $valor / $libra;
    echo '<p>Dólares: ' . number_format($conv_dolar, 2) . "</p>";
    echo '<p>Euros: ' . number_format($conv_euro, 2) . "</p>";
    echo '<p>Libras: ' . number_format($conv_libra, 2) . "</p>";
}
?>
