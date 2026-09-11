<?php



?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Menu Administrativo</title>


    <style>
    html,
    body {

        min-height: 100%;

        margin: 0;

    }


    body {

        min-height: 100vh;

        background-image:
            url('../../../../../src/img/a-minimalist-digital-illustration-featur_DhicowWLWH6FxqapvhoEtQ_FqyHqyrGTtWEKy66pQ3xOg_sd.jpeg');

        background-size: cover;

        background-repeat: no-repeat;

        background-position: center;

    }


    .layout {

        display: flex;

        min-height: calc(100vh - 56px);

    }


    .sidebar-container {

        flex-shrink: 0;

        min-height: calc(100vh - 56px);

    }

    .conteudo {

        flex: 1;

        min-width: 0;

        min-height: calc(100vh - 56px);

        display: flex;

        align-items: center;

        justify-content: center;

        padding: 30px;

    }

    .menu-card {
        width: 100%;
        max-width: 1100px;
        min-height: 500px;

        padding: 35px 40px;

        background-color: rgba(255, 255, 255, 0.94);

        border-radius: 15px;

        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);

        display: flex;
        flex-direction: column;
    }


    @media (max-width: 768px) {

        .layout {

            flex-direction: column;

        }


        .sidebar-container {

            width: 100%;

        }


        .conteudo {

            padding: 15px;

        }

    }
    </style>

</head>


<body>


    <?php

    include '../../include/navbar.php';

    ?>


    <div class="layout">


        <div class="sidebar-container">

            <?php

            include '../../include/sidebar.php';

            ?>

        </div>


        <main class="conteudo">

            <div class="menu-card text-center">
                <h3>Consulta Frigobar</h3>

                <form action="consultar_frigobar.php" method="get">
                    <br>
                    Status: <br>
                    <input type="radio" name="fstatus" value="A" /> Ativo
                    <input type="radio" name="fstatus" value="I" /> Inativo <br>
                    <br>
                    <input type="submit" value="Buscar">

                </form>


                <hr />
                <?php
                include '../../../../Domain/frigobar/cFrigobar.php'

                ?>


            </div>

        </main>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>


</body>

</html>