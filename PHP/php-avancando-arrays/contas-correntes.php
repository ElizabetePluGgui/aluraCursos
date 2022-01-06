<?php

$conta1 = [
    'titular' => 'Elizabete',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Nicole',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Heitor',
    'saldo' => 300
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contas correntes</title>
</head>
<body>
<h1>Contas correntes</h1>

<dl>
    <!-- foreach foi criado para ele repetir e manipular todos os dados do cliente -->
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
    <?php } ?>
</dl>
</body>
</html>
