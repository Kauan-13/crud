<?php

include_once("connect.php");
include_once("Crud.php");

$obj = new Crud($conn);

$id = $_GET['id'];

$dado = $obj->readInfo($id)

?>

<link rel="stylesheet" href="css/estilo.css">
<main>
    <header> Altere os campos necessários </header>
    <form action="update.php" method="post">
        <p> Usuário: <input type="text" name="user" value="<?=$dado->nome;?>"> </p>
        <p> Senha: <input type="password" name="pass" value="<?=$dado->senha;?>"> </p>
        <p> E-mail: <input type="email" name="mail" value="<?=$dado->mail;?>"> </p>
        <p> Bairro: <input type="text" name="hood" value="<?=$dado->bairro;?>"> </p>
        <p> Rua: <input type="text" name="st" value="<?=$dado->rua;?>"> </p>
        <p> Número: <input type="number" name="num" value="<?=$dado->numero;?>"> </p>
        <p> Complemento: <input type="text" name="comp" value="<?=$dado->complemento;?>"> </p>
        <p> CNPJ: <input type="text" name="cnpj" value="<?=$dado->cnpj;?>"> </p>
        <input type="hidden" name="id" value="<?=$dado->id;?>">
        <button type="submit"> Inserir Dados </button>
    </form>
</main>