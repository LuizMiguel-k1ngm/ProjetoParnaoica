```php
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Colaborador</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >

    <!-- JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

    <script
        type="text/javascript"
        src="../js/cidades-estados-v0.2.js">
    </script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;

            background: #1F2937;

            display: flex;
            align-items: center;
            justify-content: center;

            font-family: Arial, Helvetica, sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;

            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .login-icon {
            width: 70px;
            height: 70px;

            margin: 0 auto 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #1F2937;
            color: #ffffff;

            font-size: 32px;
        }

        .login-title {
            color: #1F2937;
            font-size: 25px;
            font-weight: 700;

            text-align: center;

            margin-bottom: 8px;
        }

        .login-subtitle {
            color: #6B7280;
            text-align: center;

            margin-bottom: 30px;
        }

        .form-label {
            color: #374151;
            font-weight: 600;
        }

        .input-group-text {
            background: #F3F4F6;
            border-color: #D1D5DB;
            color: #6B7280;
        }

        .form-control {
            height: 48px;
            border-color: #D1D5DB;
        }

        .form-control:focus {
            border-color: #1F2937;

            box-shadow: 0 0 0 0.2rem rgba(31, 41, 55, 0.15);
        }

        .btn-login {
            height: 48px;

            background: #1F2937;
            border: none;

            font-weight: 600;

            transition: 0.2s;
        }

        .btn-login:hover {
            background: #111827;

            transform: translateY(-1px);
        }

        .login-footer {
            margin-top: 25px;

            text-align: center;

            color: #9CA3AF;
            font-size: 14px;
        }

        .message {
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <main class="login-container">

        <div class="login-card">

            <!-- Ícone -->
            <div class="login-icon">
                <i class="bi bi-person-fill"></i>
            </div>

            <!-- Título -->
            <h1 class="login-title">
                Bem-vindo, colaborador
            </h1>

            <p class="login-subtitle">
                Entre com suas credenciais para continuar
            </p>

            <!-- Formulário -->
            <form
                action="colaborador/verificarlogin.php"
                method="post"
            >

                <!-- Login -->
                <div class="mb-3">

                    <label
                        for="login"
                        class="form-label"
                    >
                        Login
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="login"
                            name="login"
                            placeholder="Digite seu login"
                            autocomplete="username"
                            required
                        >

                    </div>

                </div>

                <!-- Senha -->
                <div class="mb-4">

                    <label
                        for="senha"
                        class="form-label"
                    >
                        Senha
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            class="form-control"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                            autocomplete="current-password"
                            required
                        >

                    </div>

                </div>

                <!-- Botão -->
                <button
                    type="submit"
                    class="btn btn-primary btn-login w-100"
                >
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    Entrar
                </button>

            </form>

            <!-- Mensagem PHP -->
            <?php

            if (!empty($_GET["msg"])) {

                $msg = htmlspecialchars(
                    $_GET["msg"],
                    ENT_QUOTES,
                    'UTF-8'
                );

                echo '
                    <div class="alert alert-warning message" role="alert">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        ' . $msg . '
                    </div>
                ';
            }

            ?>

            <!-- Rodapé -->
            <div class="login-footer">
                Sistema de Gestão de Colaboradores
            </div>

        </div>

    </main>

</body>

</html>
```
