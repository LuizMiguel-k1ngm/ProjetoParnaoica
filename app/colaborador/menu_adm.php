<?php
include './validar.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<style>
    body {
        background-image: url(../../img/a-minimalist-digital-illustration-featur_DhicowWLWH6FxqapvhoEtQ_FqyHqyrGTtWEKy66pQ3xOg_sd.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;

    }




    #ma {
        display: grid;
        align-items: center;
        justify-content: center;
    }
</style>

<body class="container-fluid">
    <div>

        <br>
        <div id="ma">

            <h3>MENU ADM: </h3>


            <br><br>
            <h6>CONSULTAS:</h6>
            <a class="btn btn-success p-1 m-1" href="../include/consultar_frigobar.php">Consultar frigobar</a>
            <a class="btn btn-success p-1 m-1" href="../include/consultar_cliente.php">Consultar cliente</a>
            <a class="btn btn-success p-1 m-1" href="../include/consultar_acomodacao.php">Consultar acomodação</a>
            <a class="btn btn-success p-1 m-1" href="../include/consultar_colaborador.php">Consultar colaborador</a>
            <br>

            <h6>CADASTROS: </h6>


            <a class="btn btn-success p-1 m-1" href="../include/cadastro_frigobar.php">Cadastrar Frigobar</a>
            <a class="btn btn-success p-1 m-1" href="../include/cadastro_kit_frigobar.php">Cadastrar itens do
                frigobar</a>
            <a class="btn btn-success p-1 m-1" href="../include/cadastro_itensFrigobar.php">Cadastrar Consumo do
                frigobar</a>
            <a class="btn btn-success p-1 m-1" href="../include/cadastro_colaborador.php">Cadastrar Colaborador</a>
            <a class="btn btn-success p-1 m-1" href="../include/cadastro_login_colaborador.php">Cadastrar acesso do
                colaborador</a>
            <br>
            <h6>RELATÓRIOS:</h6>
            <a class="btn btn-success p-1 m-1" href="../include/relatorio.php" tipe="button">Relatórios</a>


            <br>
            <h6>DASHBORD:</h6>

            <a class="btn btn-success p-1 m-1" href="../include/deshbord.php">Dashbord</a>

            <a class="btn btn-success p-1 m-1 mt-5" href="../index.php">Sair</a>

        </div>
    </div>
</body>

</html>