<?php
date_default_timezone_set("America/Sao_Paulo");

if (!empty($_GET["cpf"])) {
    $cpf = $_GET["cpf"];
    include_once '../_config/conn.php';

    $data_atual = date('Y-m-d');

    $sqli = "SELECT c.nome, c.cpf, c.email, c.telefone, 
                    r.idReserva, r.data_checkin, r.data_checkout, 
                    a.nome AS nome_acomodacao
             FROM cliente c
             INNER JOIN reserva r ON c.idusuario = r.idusuario
             INNER JOIN acomodacao a ON r.idAcomodacao = a.idAcomodacao
             WHERE c.cpf = '$cpf'  and r.data_checkin = '$data_atual' and r.rstatus = 'PE'";

    $result = mysqli_query($con, $sqli);
    $totalregistros = mysqli_num_rows($result);

    if ($totalregistros > 0) {
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
            <script type="text/javascript" src="../js/cidades-estados-v0.2.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">



            <title>Document</title>


        </head>


        <body>
            <br>
            <table width="900px" border="1px" class="bg-info">
                <tr>
                    <th>Nome</th>
                    <th>cpf</th>
                    <th>email</th>
                    <th>telefone</th>
                    <th>reserva</th>
                    <th>acomodação</th>
                    <th>data check-in</th>
                    <th>data check-out</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $idReserva = $row["idReserva"];
                ?>
                    <tr>
                        <td><?php echo $row["nome"] ?></td>
                        <td><?php echo $row["cpf"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["telefone"] ?></td>
                        <td><?php echo $row["idReserva"] ?></td>
                        <td><?php echo $row["nome_acomodacao"] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($row["data_checkin"])) ?></td>
                        <td><?php echo date('d/m/Y', strtotime($row["data_checkout"])) ?></td>
                    </tr>
                <?php } ?>
            </table>
    <?php
        echo "Total de registros: " . $totalregistros;
    } else {
        echo "Nenhum cliente encontrado!";
    }
}
    ?>



        </body>

        </html>