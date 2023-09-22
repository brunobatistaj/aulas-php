<?php
$nome = $_GET["nome"];


if ($_GET["nome"] && $_GET["sexo"] === "m" && $_GET["idade"] >= 40){
    echo "<p>Bem Vindo, Sr. {$nome}</p>";
}else if($_GET["nome"] && $_GET["sexo"] === "m"){
    echo "<p>Bem Vindo, {$nome}</p>";
}else if($_GET["sexo"] === "f" && $_GET["idade"] >= 40){
    echo "<p>Bem Vinda, Sra. {$nome}</p>";
}else{
    echo "<p>Bem Vinda, {$nome}</p>";
}

if (isset($_GET['salarios1']) && isset($_GET['salarios2']) && isset($_GET['salarios3'])) {
    $salario1 = floatval($_GET['salarios1']);
    $salario2 = floatval($_GET['salarios2']);
    $salario3 = floatval($_GET['salarios3']);

    $media = ($salario1 + $salario2 + $salario3) / 3;
    echo "Média dos Salários: R$ " . number_format($media, 2, ',', '.') . "<br>";
} else {
    echo "Por favor, informe os três salários.";
}

?>