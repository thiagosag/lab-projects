<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
        'nome' => 'Blastoise',
        'descricao' => 'Carta rara de água, Ataque: 3000, defesa:2500...',
        'imagem' => 'https://img.mypcards.com/cdn-cgi/image/h=425,fit=contain,f=auto/img/2/2158/pokemon_scr_030_142/pokemon_scr_030_142_pt.jpg'
        ]);

        /* Roda: 
        php artisan db:seed --class=ProdutoSeeder */
    }
}
