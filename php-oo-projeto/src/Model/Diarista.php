<?php

namespace App\Model;

class Diarista 
{
    public $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}