<?php
session_start();
ob_start();

include_once '../model/cliente.class.php';

$cli = new Cliente();

$cli->nome = "Arthur";
$cli->origem = "Valetine";
$cli->destino = "Rhodes";

echo $cli;
