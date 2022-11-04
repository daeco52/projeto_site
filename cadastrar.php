<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <form method="POST">
        <div class="page-header">
            <img src="img/registro.png">
            <h1>Cadastar Usuário</h1>
        </div>


        <div class="form-group"><br>
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu Nome"><br>
        </div>

        <div class="form-group"><br>
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" placeholder="Digite seu E-mail"><br>
        </div>

        <div class="form-group"><br>
            <label>Usuário</label>
            <input type="text" class="form-control" name="usuario" placeholder="Digite o Usuário"><br>
        </div>


        <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Digite a Senha"><br>
        </div>

        <input type="submit" name="btnCadUsuario" class="btn btn-success" value="Cadastrar">
        <input type="reset" name="btnLimpar" class="btn btn-success" value="Limpar"><br><br>
        Lembrou? <a href="contato.php">Clique Aqui </a> para Logar
    </form>

</body>

</html>




<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);

if ($btnCadUsuario) {
    include_once 'conexao.php';
    $dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //var_dump($dados);
    $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

    $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES ('" . $dados['nome'] . "',  '" . $dados['email'] . "', '" . $dados['usuario'] . "', '" . $dados['senha'] . "')";

    $resultado_usuario = mysqli_query($conn, $result_usuario);
    if (mysqli_insert_id($conn)) {
        $_SESSION['msgcad'] =  " Usuário Cadastrado com Sucesso!<br>";
        header("Location: contato.php");
    } else {
        $_SESSION['msg'] =  "Erro ao Cadastrar o Usuário<br>";
    }
}
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
?>