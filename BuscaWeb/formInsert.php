<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title> Insert </title>
</head>
<body>
    <main>
        <header> Cadastrar dados dos clientes</header>
        <section>
            <form action="insert.php" method="post">
                <p> Usuário: <input type="text" name="user"> </p>
                <p> Senha: <input type="password" name="pass"> </p>
                <p> E-mail: <input type="email" name="mail"> </p>
                <p> Bairro: <input type="text" name="hood"> </p>
                <p> Rua: <input type="text" name="st"> </p>
                <p> Número: <input type="number" name="num"> </p>
                <p> Complemento: <input type="text" name="comp"> </p>
                <p> CNPJ: <input type="text" name="cnpj"> </p>
                <button type="submit"> Inserir Dados </button>
            </form>
        </section>
    </main>
</body>
</html>