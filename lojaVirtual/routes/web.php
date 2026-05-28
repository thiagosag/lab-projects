<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
  /*
Route::get('/', function () {
   $produtos = [
        [
            'nome' => 'Charizard',
            'descricao' => 'Carta rara de fogo',
            'imagem' => 'https://m.media-amazon.com/images/I/71nbfl-JklS.jpg'
        ],

        [
            'nome' => 'Blastoise',
            'descricao' => 'Carta rara de água',
            'imagem' => 'https://img.mypcards.com/cdn-cgi/image/h=425,fit=contain,f=auto/img/2/2158/pokemon_scr_030_142/pokemon_scr_030_142_pt.jpg'
        ]
    ];

    return view('home', compact('produtos')); 

});
*/

Route::get('/', [ProdutoController::class, 'index']);
