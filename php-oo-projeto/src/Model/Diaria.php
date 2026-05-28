<?php

namespace App\Model;

class Diaria 
{
    public Diarista $diarista;
    public Cliente $cliente;
    public $tempo;
    public $data;

    public function __construct($data, $tempo, Diarista $diarista, Cliente $cliente)
    {
        $this->diarista = $diarista;
        $this->cliente = $cliente;
        $this->data = $data;
        $this->tempo = $tempo;
    }

    static public function takeAll()
    {
        return [
            new self(
                '20/10/2021',
                4,
                new Diarista('Salsicha'),
                new Cliente('Velma')
            ),

            new self(
                '12/05/2021',
                5,
                new Diarista('Fred'),
                new Cliente('Salsicha')
            ),

            new self(
                '10/08/2021',
                8,
                new Diarista('Dafini'),
                new Cliente('Velma')
            ),

            new self(
                '17/07/2021',
                6,
                new Diarista('Velma'),
                new Cliente('Dafini')
            ),

            new self(
                '05/05/2021',
                7,
                new Diarista('Velma'),
                new Cliente('Fred')
            ),
        ];
    }
}