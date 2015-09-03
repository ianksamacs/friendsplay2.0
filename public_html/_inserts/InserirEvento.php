<?php 

include ("../_Funcoes/FuncaoInserir.php");


//Perfil
$nome = $_REQUEST['nNome'];


//Logradouro
$local = $_REQUEST['nLocal'];
$numeroDoLocal = $_REQUEST['nNumeroDolocal'];
$cidade = $_REQUEST['nCidade'];
$estado = $_REQUEST['nEstado'];

//Caracteristicas e data
$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];	
$numeroMaximo = $_REQUEST['nNumMax'];
$numeroMinimo = $_REQUEST['nNumMin'];
$privacidade = $_REQUEST['nPrivacidade'];

//Descrição
$descricao = $_REQUEST['descricao'];




inserir(array("nome_evento","local_evento", "numero", "cidade", "estado", "data_evento","horario_evento","privacidade_evento",
	"descricao_evento"),
	array($nome, $local, $numeroDoLocal, $cidade,  $estado, $data, $hora, $privacidade, $descricao  ), "Evento");

 ?>