<?php

$nome = "Emygdio";

function teste(){
	global $nome;
	echo $nome;

}

function teste2(){
	$nome = "José";
	echo $nome. "Agora no teste 2";

}

teste();

teste2();

?>