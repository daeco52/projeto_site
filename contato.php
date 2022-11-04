<?php
session_start();

?>

<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>



<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
if (isset($_SESSION['msgcad'])) {
    echo $_SESSION['msgcad'];
    unset($_SESSION['msgcad']);
}
?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login do Usuário</title>
	<link rel="icon" href="favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-primary-color">
        <div class="container-fluid col-11 m-auto">
            <a href="#" class="navbar-brand">
                <img src="img/lamp.png">
                <span>dsm-web</span>
            </a>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <di class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="dicas.php">Dicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contato.php">Contato</a>
                    </li>
                </ul>
            </di>
        </div>
    </nav>

    <form method="POST" action="valida.php">
        <div class="page-header">
            <img src="img/cadeado.png">
            <h1>Login</h1>
        </div>

        <div class="form-group"><br>
            <label>Usuário</label>
            <input type="text" class="form-control" name="usuario" placeholder="Seu Usuário"><br>
        </div>


        <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Sua Senha"><br>
        </div>


        <input type="submit" name="btnLogin" class="btn btn-success" value="Acessar">
        <input type="reset" name="btnLimpar" class="btn btn-success" value="Limpar"><br><br>
        <h4>Você Ainda Não Possui uma Conta?</h4>
        <a href="cadastrar.php">Crie Grátis</a>
    </form>
	
	