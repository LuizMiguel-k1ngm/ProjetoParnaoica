
<?php
// Aqui você pode futuramente receber os dados da consulta.
//
// Exemplo:
// $frigobares = $frigobarController->consultar(
//     $_GET['busca'] ?? '',
//     $_GET['status'] ?? ''
// );
//
// Por enquanto, a tabela abaixo utiliza $frigobares como fonte de dados.

$busca  = $_GET['busca'] ?? '';
$status = $_GET['status'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <title>Consulta de Frigobares</title>

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
            align-items: flex-start;
            justify-content: center;

            padding: 30px;
        }

        .menu-card {
            width: 100%;
            max-width: 1100px;

            padding: 30px 35px;

            background-color: rgba(255, 255, 255, 0.95);

            border-radius: 15px;

            box-shadow:
                0 4px 20px rgba(0, 0, 0, 0.25);
        }

        .titulo {
            font-weight: 600;
            margin-bottom: 25px;
        }

        .filtros {
            background-color: #f8f9fa;

            border: 1px solid #dee2e6;

            border-radius: 10px;

            padding: 20px;

            margin-bottom: 25px;
        }

        .tabela-container {
            overflow-x: auto;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            white-space: nowrap;
            vertical-align: middle;
        }

        .table tbody td {
            vertical-align: middle;
        }

        .badge-status {
            min-width: 80px;
            display: inline-block;
        }

        .acoes {
            white-space: nowrap;
        }

        .acoes .btn {
            margin-right: 5px;
        }

        .sem-registros {
            padding: 40px;
            text-align: center;
            color: #6c757d;
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

            .menu-card {
                padding: 20px 15px;
            }

            .filtros .col-md-5,
            .filtros .col-md-3,
            .filtros .col-md-2 {
                margin-bottom: 10px;
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

            <div class="menu-card">

                <!-- TÍTULO -->

                <h3 class="titulo text-center">
                    Consulta de Frigobares
                </h3>


                <!-- FILTROS -->

                <form
                    action="consultar_frigobar.php"
                    method="get"
                    class="filtros"
                >

                    <div class="row align-items-end g-3">

                        <!-- CAMPO DE PESQUISA -->

                        <div class="col-md-6">

                            <label
                                for="busca"
                                class="form-label"
                            >
                                Pesquisar
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-search"></i>
                                </span>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="busca"
                                    name="busca"
                                    placeholder="Frigobar ou quarto..."
                                    value="<?= htmlspecialchars($busca) ?>"
                                >

                            </div>

                        </div>


                        <!-- FILTRO DE STATUS -->

                        <div class="col-md-3">

                            <label
                                for="status"
                                class="form-label"
                            >
                                Status
                            </label>

                            <select
                                class="form-select"
                                id="status"
                                name="status"
                            >

                                <option value="">
                                    Todos
                                </option>

                                <option
                                    value="A"
                                    <?= $status === 'A' ? 'selected' : '' ?>
                                >
                                    Ativos
                                </option>

                                <option
                                    value="I"
                                    <?= $status === 'I' ? 'selected' : '' ?>
                                >
                                    Inativos
                                </option>

                            </select>

                        </div>


                        <!-- BOTÃO BUSCAR -->

                        <div class="col-md-3">

                            <button
                                type="submit"
                                class="btn btn-primary w-100"
                            >

                                <i class="bi bi-search"></i>

                                Buscar

                            </button>

                        </div>

                    </div>

                </form>


                <!-- TABELA -->

                <div class="tabela-container">

                    <table class="table table-hover table-bordered">

                        <thead class="table-light">

                            <tr>

                                <th>
                                    Frigobar
                                </th>

                                <th>
                                    Quarto
                                </th>

                                <th>
                                    Status
                                </th>

                                <th class="text-center">
                                    Ações
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php if (!empty($frigobares)): ?>

                                <?php foreach ($frigobares as $frigobar): ?>

                                    <tr>

                                        <!-- FRIGOBAR -->

                                        <td>
                                            <?= htmlspecialchars($frigobar['frigobar']) ?>
                                        </td>


                                        <!-- QUARTO -->

                                        <td>
                                            <?= htmlspecialchars($frigobar['quarto']) ?>
                                        </td>


                                        <!-- STATUS -->

                                        <td>

                                            <?php if ($frigobar['status'] === 'A'): ?>

                                                <span class="badge text-bg-success badge-status">
                                                    Ativo
                                                </span>

                                            <?php else: ?>

                                                <span class="badge text-bg-secondary badge-status">
                                                    Inativo
                                                </span>

                                            <?php endif; ?>

                                        </td>


                                        <!-- AÇÕES -->

                                        <td class="text-center acoes">

                                            <!-- EDITAR -->

                                            <a
                                                href="editar_frigobar.php?id=<?= urlencode($frigobar['id']) ?>"
                                                class="btn btn-sm btn-outline-primary"
                                                title="Editar frigobar"
                                            >

                                                <i class="bi bi-pencil-square"></i>

                                            </a>


                                            <!-- INATIVAR / ATIVAR -->

                                            <?php if ($frigobar['status'] === 'A'): ?>

                                                <a
                                                    href="inativar_frigobar.php?id=<?= urlencode($frigobar['id']) ?>"
                                                    class="btn btn-sm btn-outline-danger"
                                                    title="Inativar frigobar"
                                                    onclick="return confirm('Deseja realmente inativar este frigobar?');"
                                                >

                                                    <i class="bi bi-x-circle"></i>

                                                </a>

                                            <?php else: ?>

                                                <a
                                                    href="ativar_frigobar.php?id=<?= urlencode($frigobar['id']) ?>"
                                                    class="btn btn-sm btn-outline-success"
                                                    title="Ativar frigobar"
                                                    onclick="return confirm('Deseja realmente ativar este frigobar?');"
                                                >

                                                    <i class="bi bi-check-circle"></i>

                                                </a>

                                            <?php endif; ?>

                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            <?php else: ?>

                                <tr>

                                    <td
                                        colspan="4"
                                        class="sem-registros"
                                    >

                                        <i class="bi bi-inbox fs-2 d-block mb-2"></i>

                                        Nenhum frigobar encontrado.

                                    </td>

                                </tr>

                            <?php endif; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

    </div>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

</body>

</html>

