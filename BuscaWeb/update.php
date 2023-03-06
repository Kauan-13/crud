<?php

include_once("connect.php");
include_once("Crud.php");

extract($_POST);

$obj = new Crud($conn);

$obj->update($id,$user,$pass,$mail,$hood,$st,$num,$comp,$cnpj);

?>
