<?php

namespace App\Http\Controllers;

use App\Models\Finished;
use App\Http\Requests\UsuarioFavoritoRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FinishedController extends Controller
{

    public function usuarioFinished( UsuarioFavoritoRequest $request)
    {
        $responseArr = Finished::join('books','finisheds.book_id','books.id')
        ->where('finisheds.user_id',$request->id)->get();

        return response()->json($responseArr, Response::HTTP_OK);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finished  $finished
     * @return \Illuminate\Http\Response
     */
    public function show(Finished $finished)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finished  $finished
     * @return \Illuminate\Http\Response
     */
    public function edit(Finished $finished)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Finished  $finished
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finished $finished)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finished  $finished
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finished $finished)
    {
        //
    }
}
