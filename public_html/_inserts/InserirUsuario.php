<?php 

include ("../_Funcoes/FuncaoInserir.php");

$id = $_SESSION['FBID'];
$nome = $_SESSION['FULLNAME'];

inserir(array("nome_usuario","id_usuario"), array($id,$nome),'Usuario');

 ?>