<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function store(Request $request){

        /* dd(
        $request->all(),
        $request->allFiles(),
        $request->hasFile('image'),
        $request->file('image')
        );
        */

        // 1. Validação básica.
        $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image',
        ]);

        // 2. Salva-se a imagem no storage.
        /* $path = $request->file('image')->store('images', 'public'); */
        $file = $request->file('image');
        $path = $file->store('images', 'public');


        // 3. Criar registro no banco.
        $image = Image::create([
            'title' => $request->title,
            'category' => $request->category,
            'path' => $path,
        ]);

        // Resposta da API.
        return response()->json([
            'message' => 'Imagem cadastrada com sucesso',
            'data' => $image,
        ]);
    }

    public function random(){
        $image = Image::inRandomOrder()->first();

        if(!$image) {
            return response()->json([
                'message' => 'We did not find nothing.',
            ], 404);
        }
        else {
            return response()->json([
                'id' => $image->id,
                'title' => $image->title,
                'category' => $image->category,
                'url' => asset('storage/'.$image->path),
            ]);
        }
    }
    #VERSÃO CHAT.

    public function category($category, $amount = 1)
    {
    $amount = min((int) $amount, 20);

    $images = Image::where('category', $category)
        ->inRandomOrder()
        ->limit($amount)
        ->get();

    if ($images->isEmpty()) {
        return response()->json([
            'message' => 'Nenhuma imagem encontrada para essa categoria'
        ], 404);
    }

    return response()->json([
        'category' => $category,
        'count' => $images->count(),
        'imagem' => $images
    ]);

    }

    /* public function category($category, $amount = 1){
        $amount = min((int) $amount, 20);
        $images = Image::where('category', $category)->inRandomOrder()->limit($amount)->get();

        if ($category){
            return response()->json(['message' => 'Category exist', 'imagem' => $images]);
        } else {
            return response()->json([
        'message' => 'Category does not exist',
        ], 404);
    }
    } */
}
