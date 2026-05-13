<?php
@session_start();
include_once '../colaborador/validar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro acomodação</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/cidades-estados-v0.2.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- jquerymask -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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


    #form1 {
        display: grid;
        justify-content: center;
        align-items: center;

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

        <div>


            <form action="../acomodacao/gAcomodacao.php" method="post" id="form1">
                <h4>Cadastro Acomodação</h4>
                Nome da acomodação:<br />
                <input type="text" name="nome" required /><br />

                Número da acomodação:<br />
                <input type="number" name="numero_quarto" required min='1' /><br />

                Capacidade:<br />
                <input type="number" name="capacidade" min="1" max ="4" required /><br />

                Valor da Diária :<br />
                <input type="text" name="valor" id="valor_moeda" placeholder="0,00" required /><br />


                <div class="form-check">
                    TIPO: <br> <input class="form-check-input" type="radio" name="radioDefault" value="suíte" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                        Apartamento
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" value="apartamento" id="radioDefault2" checked>
                    <label class="form-check-label" for="radioDefault2">
                        Suíte
                    </label>
                </div>

                <br />

                <input type="submit" value="Enviar" />

                <a href="../colaborador/painel.php">Página Inicial</a><br>
                <a href="sair.php">Sair</a><br>

            </form>

            <script>
                $(document).ready(function() {
                    $('#valor_moeda').mask('#.##0,00', {
                        reverse: true
                    });
                });
            </script>
            <br>

        </div>

    </div>

</body>

</html>