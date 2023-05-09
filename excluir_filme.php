<?php
require 'repositorio.php';

// echo $_REQUEST['id'];

$repositorio->removerFilme($_REQUEST['id']);

header('Location: lista_filmes.php');
