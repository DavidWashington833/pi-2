<?php

if(odbc_error() == 23000) {
    $msg = "ERRO: Este item está sendo usado na tabela eventos.";
    $alert = "danger";
}