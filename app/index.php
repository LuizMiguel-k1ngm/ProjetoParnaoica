<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/cidades-estados-v0.2.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


</head>

<style>
  body {
    height: 100vh;
    background-image: url(../img/a-minimalist-digital-illustration-featur_DhicowWLWH6FxqapvhoEtQ_FqyHqyrGTtWEKy66pQ3xOg_sd.jpeg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;

  }

  #navbar {
    background-color: #6b8184;

  }
  #form{
    display: grid;
    justify-content: center;
    margin-top: 10px;
  }
</style>



<body>
  <div>

    <div class="container " id="form">
      <h1>BEM-VINDO COLABORADOR</h1>
      <form action="colaborador/verificarlogin.php" method="post">

        Login:<br />
        <input class="" type="text" name="login" /><br />

        Senha:<br />
        <input type="password" name="senha" /><br /> <br />

        <input type="submit" value="Login" />

        <br>

      </form>

      <?php
      if (!empty($_GET["msg"])) {
        $msg = $_GET["msg"];
        echo $msg;
      }


      ?>

    </div>
  </div>
</body>

</html>


<!-- criar tela principal para redirecionar para cadastro e reserva  !-->