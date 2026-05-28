<?php

namespace App\Model;

class Cliente 
{
    public $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}