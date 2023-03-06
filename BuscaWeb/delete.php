<?php

include_once("connect.php");
include_once("Crud.php");

$id = $_GET['id'];

$obj = new Crud($conn);

$obj->delete($id);

?>