<?php

require_once "vendor/autoload.php";

use App\Controller\Diaria;

$diariaController = new Diaria;
$diariaController->listar();