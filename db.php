<?php

$servidor = 'localhost';
$usuario = 'root';
$pass = '';
$bd = 'chat';

$connect = new mysqli($servidor, $usuario, $pass, $bd);

function formatarData($pData)
{
	return date('g:i a', strtotime($pData));
}

function query_msg($connect)
{
	$aSql = "
		SELECT
			id,
			nome,
			msg,
			data
		FROM
			tb_chat
	";

	$pRetorno = mysqli_fetch_all(mysqli_query($connect, $aSql));
	return $pRetorno ? $pRetorno : array();
}
