<?php
@session_start();
include_once '../colaborador/validar.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Relatório de Reservas</title>
</head>

<body>

    <h3>Relatório Range Datas (PDF)</h3>

    <form action="../relatorio/range_data.php" method="get">
        Data inicial: <br>
        <input type="date" name="data_inicial" required><br><br>

        Data final: <br>
        <input type="date" name="data_final" required><br><br>

        <button type="submit">Gerar PDF</button>
    </form>

    <br>
    <a href="../colaborador/painel.php">Página Inicial</a><br>
    <a href="sair.php">Sair</a>

</body>

</html>