<?php

include_once("connect.php");
include_once("Crud.php");

extract($_POST);

$obj = new crud($conn);

$obj->setDados($user,$pass,$mail,$hood,$st,$num,$comp,$cnpj);

$obj->insertDados();


?>