<?php

namespace App\Http\Controllers;

use App\Http\Requests\LibroCategoriaRequest;
use App\Http\Requests\LibroIDRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use \Exception;
use Illuminate\Http\Response;

class BookController extends Controller
{
    function librosCategoria( LibroCategoriaRequest $request){

        $responseArr = Book::where('category_id', $request->id)->get();
        
        return response()->json($responseArr, Response::HTTP_OK);

    }

    function datosLibro( LibroIDRequest $request){

        $responseArr = Book::join('avatar_objects','books.avatarObjectId','avatar_objects.id')->where('books.id', $request->id)->first();
        return response()->json($responseArr, Response::HTTP_OK);

    }
}
