<?php
@session_start();
include_once '../colaborador/validar.php';
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
<style>
    body {
        height: 100vh;
        background-image: url(../../img/a-minimalist-digital-illustration-featur_DhicowWLWH6FxqapvhoEtQ_FqyHqyrGTtWEKy66pQ3xOg_sd.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;


    }

    #form1 {
        display: grid;
        padding: 10px;

    }

    #navbar {
        background-color: #6b8184;

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


        <div id="form1" class="m-1">
            <h3>Check-out: hospedes</h3>

            <form action="checkout.php" method="GET">
                CPF: <br>
                <input type="text" name="cpf" required value="<?php echo $_GET['cpf'] ?? ''; ?>">

                <input type="submit" value="buscar">

            </form>

            <hr>
            <?php

            include '../reserva/eReserva.php';
            ?> <form action="" method="POST">

                <input type="hidden" name="idReserva" value="<?php echo $idReserva ?? ''; ?>">

                <input type="submit" name='rStatus' value='confirmar'>
                <input type="submit" name='rStatus' value='cancelar'>

            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include '../checkout/gCheckout.php';
            }
            ?>
            <br>
            <a href="../colaborador/painel.php">Página Inicial</a><br>
            <a href="sair.php">Sair</a><br>



        </div>

    </div>
</body>

</html>