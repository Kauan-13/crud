<?php

include_once("connect.php");
include_once("Crud.php");

$obj = new Crud($conn);

$obj->readInfo();

$dado = $obj->getAll();

echo "<link rel='stylesheet' href='css/estilo.css'>";

echo "<main>";
echo "<header> Selecione um registro para alterar </header>";

echo "<table border='1'>";
echo "<tr><th> id </th> <th> nome </th> <th> senha </th> <th> email </th> <th> bairro </th> 
            <th> rua </th> <th> número </th> <th> complemento </th> <th> cnpj </th> <th> logo </th> <th> excluir </th></tr>";

foreach ($dado as $info) {
    echo "<tr>  
            <td>" .$info['id']. "</td> 
            <td>" .$info['nome']. "</td>
            <td>" .$info['senha']. "</td>
            <td>" .$info['mail']. "</td>
            <td>" .$info['bairro']. "</td>
            <td>" .$info['rua']. "</td>
            <td>" .$info['numero']. "</td>
            <td>" .$info['complemento']. "</td>
            <td>" .$info['cnpj']. "</td>
            <td>" .$info['logo']. "</td>
            <td> <a href=delete.php?id=" .$info['id']. "> Excluir </a> </td>
    </tr>";
}

echo "</table>";
echo "</main>";

?>