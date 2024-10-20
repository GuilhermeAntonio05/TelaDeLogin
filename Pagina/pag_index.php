<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TelaDeLogin</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    <div id="fulldiv">
        <div id="titulo">
            <h1>Tela de login</h1>
            <p>Por favor entre com seus dados.</p>
        </div>

        <div id="formulario">
            <!-- essa tag <action> após o input submit ativa o arquivo (add_usuario.php), usando o metodo post -->
            <form action="aplicacoes/add_usuario.php" method="POST">
                <input type="text" name="nome" placeholder="Digte seu nome" required>
                <input type="email" name="email" placeholder="Digte seu email" required>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
                <input type="submit">
            </form>
        </div>

    </div>
</body>

</html>