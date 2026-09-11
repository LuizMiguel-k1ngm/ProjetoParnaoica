<?php
@session_start();
include_once '../colaborador/validar.php';

require('../Config/conn.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>


<style>
    body {
        background-image: url(../../img/a-minimalist-digital-illustration-featur_DhicowWLWH6FxqapvhoEtQ_FqyHqyrGTtWEKy66pQ3xOg_sd.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;

    }

    #navbar {
        background-color: #6b8184;

    }

    #nome {
        color: white;
        font-family: fantasy;
        font-size: 25px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        color: #01c53c;
    }
</style>

<body>

    <div>
        <nav class="navbar" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" id="nome" href="../colaborador/painel.php">PARNAOICA</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" aria-label="Search" />
                    <button class="btn btn-online-success" type="submit">Search</button>
                </form>
            </div>
        </nav>



        <div class="justify-content-center d-grid">

            <h2>Cadastro da reserva</h2>

            <form action="../reserva/gReserva.php" method="post">


                <br> <select name="idCliente">

                    <option value="" disabled selected hidden>Clientes</option>

                    <?php $sqlConsultaCliente = "SELECT idusuario, nome FROM cliente";
                    $queryConsultaCliente = mysqli_query($con, $sqlConsultaCliente);
                    while ($row = mysqli_fetch_assoc($queryConsultaCliente)) { ?> <option value=<?= $row['idusuario'] ?>><?= $row['nome']
                                                                                                                            ?></option> <?php } ?>
                </select>

                <br><br>

                <select name="idAcomodacao">
                    <option value="" disabled selected hidden>Acomodações</option>
                    <?php
                    $sqlConsultaAcomodacao = "SELECT idAcomodacao, nome FROM acomodacao WHERE aStatus = 'A'";
                    $queryConsultaAcomodacao = mysqli_query($con, $sqlConsultaAcomodacao);

                    while ($row = mysqli_fetch_assoc($queryConsultaAcomodacao)) { ?>
                        <option value=<?= $row['idAcomodacao'] ?>><?= $row['nome'] ?></option>
                    <?php } ?>

                </select>

                <br>

                <br>
                Data check-in:<br />
                <input type="date" name="data_checkin" /><br />
                <br>
                Data check-out:<br />
                <input type="date" name="data_checkout" /><br />
                <br>
                Numero de Pessoas:<br />
                <input type="number" name="n_clientes" min='1' max='2' /><br />
                <br>


                <input type="submit" value="Enviar" />

            </form>

            <a href="../colaborador/painel.php">Página Inicial</a><br>
            <a href="sair.php">Sair</a><br>

        </div>
    </div>
</body>

</html>