<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title> Pesquisar no BD </title>
</head>
<body>
    <main>
        <header> Pesquisa por nome </header>
        <form action="readInfo.php" method="post">
            <p> <input type="text" name="nome" size="50"> </p>
            <button type="submit"> Pesquisar </button>
        </form>
    </main>
</body>
</html>