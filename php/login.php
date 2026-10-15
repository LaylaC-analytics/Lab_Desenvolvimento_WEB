<?php

session_start();

$msg = "";

$usuarioCorreto = "admin";
$senhaCorreta = "123456";

if(isset($_POST["entrar"])){

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if(
        $usuario == $usuarioCorreto &&
        $senha == $senhaCorreta
    ){

        $_SESSION["logado"] = true;

        header("Location: restrita.php");
        exit;

    }else{
        $msg = "Login invalido";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>

<h1>Login</h1>

<form method="post">

<label>Usuario</label>
<br>
<input type="text" name="usuario">

<br><br>

<label>Senha</label>
<br>
<input type="password" name="senha">

<br><br>

<input type="submit" name="entrar" value="Entrar">

</form>

<p><?php echo $msg; ?></p>

<br>

<a href="index.php">Voltar</a>

</body>
</html>