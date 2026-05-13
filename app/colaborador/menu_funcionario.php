<?php
include './validar.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<style>
    body {
        background-image: url(../../img/a-minimalist-digital-illustration-featur_DhicowWLWH6FxqapvhoEtQ_FqyHqyrGTtWEKy66pQ3xOg_sd.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        width: 100vh;
        height: 100vh;

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

    #mf{
        display: grid;
        align-items: center;
        justify-content: center;
    }
</style>



<body class="container-fluid ">

    <nav class="navbar" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" id="nome" href="painel.php" >PARNAOICA</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" aria-label="Search" />
                <button class="btn btn-online-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div id="mf">



        <h3>Menu de Funcionario</h3>
<br><br>

        <a class="btn btn-success p-1 m-1" href="../include/cadastro_cliente.php">Cadastrar cliente</a>
        <br>

        <a class="btn btn-success p-1 m-1 " href="../include/cadastro_reserva.php">Cadastrar reserva</a>
        <br>

        <a  class="btn btn-success p-1 m-1 " href="../include/cadastro_acomodacao.php">Cadastrar Acomodação</a>
        <br>

        <a class="btn btn-success p-1 m-1 " href="../include/checkin.php">Check-in</a>
        <br>

        <a class="btn btn-success p-1 m-1 " href="../include/checkout.php">Check-out</a>
        <br>


        <br>
        <a class="btn btn-success p-1 m-1 " href="../include/sair.php">Sair</a>



    </div>




</body>

</html>