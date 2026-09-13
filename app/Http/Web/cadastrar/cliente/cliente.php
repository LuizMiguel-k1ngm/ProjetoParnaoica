<?php
@session_start();
include_once '../colaborador/validar.php';
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/cidades-estados-v0.2.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <script type="text/javascript">
        window.onload = function() {
            new dgCidadesEstados(
                document.getElementById('estado'),
                document.getElementById('cidade'),
                true
            );
        }
    </script>

    <style>
        #estado,
        #cidade {
            width: 190px;

        }

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


        #form1 {
            display: grid;
            justify-content: center;
            align-items: center;

        }
    </style>


</head>

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


        <div id="form1">


            <h2 class="p-1">Cadastro Usuário</h2>





            <form action="../cliente/gCliente.php" method="post">
                <i class="bi bi-person-fill"></i>
                Nome: <br>
                <input class="form-label" type="text" name="nome" required pattern="[A-Za-z ]+">
                <br>

                <i class="bi bi-calendar-check"></i>
                Data de Nascimento:<br />
                <select name="dia" required class="form-label">
                    <option value="" />Dia
                    <?php
                    for ($i = 01; $i <= 31; $i++) {
                        echo "<option value='" . $i . "'/>" . $i;
                    }
                    ?>
                </select>
                <select name="mes" required>
                    <option value="" />Mês
                    <?php
                    for ($i = 01; $i <= 12; $i++) {
                        echo "<option value='" . $i . "'/>" . $i;
                    }
                    ?>
                </select>
                <select name="ano" required>
                    <option value="" />Ano
                    <?php
                    for ($i = date("Y"); $i >= date("Y") - 100; $i--) {
                        echo "<option value='" . $i . "'/>" . $i;
                    }
                    ?>
                </select>
                </br>


                <i class="bi bi-person-vcard"></i>
                CPF: <br>
                <input class="form-label" type="text" name="cpf" require="true" required pattern="[0-9]{11}" minlength="11" title="digite apenas os números do CPF">
                <br>
                <i class="bi bi-envelope-fill"></i>
                Email: <br>
                <input class="form-label" type="text" name="email" require="true" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                <br>
                <i class="bi bi-telephone"></i>
                Telefone: <br>
                <input class="form-label" type="tel" name="telefone" require="true" required pattern="[0-9]{11}" title="Digite apenas os números do telefone sem espaços">
                <br>
                <i class="bi bi-map"></i>
                Estado: <br>
                <select class="form-label" name="estado" id="estado">
                </select>
                <br>
                <i class="bi bi-geo-alt"></i>
                Cidade: <br>
                <select class="form-label" name="cidade" id="cidade">
                    <option value="" />Escolha primeiro um estado
                </select>
                <br>
                <br>

                <input type="submit">



            </form>

            <a href="../colaborador/painel.php">Página Inicial</a>
            <a href="sair.php">Sair</a><br>
        </div>

    </div>
</body>

</html>