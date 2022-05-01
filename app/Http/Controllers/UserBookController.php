<?php

namespace App\Http\Controllers;


use App\Http\Requests\UsuarioPersonalRequest;
use App\Models\UserBook;
use \Exception;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
  
    public function usuarioPersonal( UsuarioPersonalRequest $request)
    {
        $responseArr = UserBook::where('id', $request->id)->get()->first();

        return response()->json($responseArr, Response::HTTP_OK);
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
     * @param  \App\Models\UserBook  $userBook
     * @return \Illuminate\Http\Response
     */
    public function show(UserBook $userBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserBook  $userBook
     * @return \Illuminate\Http\Response
     */
    public function edit(UserBook $userBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserBook  $userBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserBook $userBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserBook  $userBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserBook $userBook)
    {
        //
    }
}
