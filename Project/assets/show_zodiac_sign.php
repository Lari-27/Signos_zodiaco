<?php include('layouts/header.php'); ?>
<?php
$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");

function ajustarData($data, $ano) {
    return DateTime::createFromFormat('d/m/Y', $data . '/' . $ano);
}

$ano = date('Y', strtotime($data_nascimento));
$data_nascimento = DateTime::createFromFormat('Y-m-d', $data_nascimento);

foreach ($signos->signo as $signo) {
    $dataInicio = ajustarData($signo->dataInicio, $ano);
    $dataFim = ajustarData($signo->dataFim, $ano);

    if ($data_nascimento >= $dataInicio && $data_nascimento <= $dataFim) {
        echo "<h2>Seu signo é: {$signo->signoNome}</h2>";
        echo "<p>{$signo->descricao}</p>";
        break;
    }
}
?>
<a href="index.php">Voltar</a>
