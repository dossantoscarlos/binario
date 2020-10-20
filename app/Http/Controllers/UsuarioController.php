<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuario.index',[ 'usuario'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opcao = Usuario::All()->pluck('nome' , 'id'); 

        return view('Usuario.create' , ['opcao' => $opcao]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $usuario = Usuario::All();
        if($usuario->count() > 0):
            $buscaUsuario = Usuario::find($request->input('indicado'));
            if ($buscaUsuario->lado_esquerdo == null): 
                $buscaUsuario->lado_esquerdo = 200;        
                $buscaUsuario->save();
                $request->merge(['lado_esquerdo' => 200 ]);
                Usuario::create($request->input());

            elseif($buscaUsuario->lado_direto == null):
                $buscaUsuario->lado_direito = 100;           
                $buscaUsuario->save();
                $request->merge(['lado_direito' => 100 ]);
                Usuario::create($request->input());

            endif;
        else: 
            // sem indicador
            Usuario::create($request->all());
        endif;
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
