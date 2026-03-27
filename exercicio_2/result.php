<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = strtolower($nome . "." . $sobrenome . "@cps.sp.gov.br");
    echo "<p>Email gerado: $email</p>";
}

?>
