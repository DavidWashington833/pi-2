<?php

include "../integracao/loginFunc.php";
lidaBasicAuthentication('../../portal/naoautorizado.php');
include "../session/professor.php";
include "../config/config.php";
include "../config/db.php";
include "../model/imagem.php";

$idImagem = $_GET['ver'];

// FUNÇÃO SELECT AREA
$imagem = getImagem($db, $idImagem);

include "../view/shared/header.php";
include "../view/imagem.php";