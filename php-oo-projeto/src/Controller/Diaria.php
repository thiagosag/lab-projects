<?php 

namespace App\Controller;

use App\Model\Diaria as ModeloDiaria;

class Diaria 
{
    public function listar()
    {
        $diarias = ModeloDiaria::takeAll();
        require_once(__DIR__ . '/../../View/listar_diarias.php');
    }
}