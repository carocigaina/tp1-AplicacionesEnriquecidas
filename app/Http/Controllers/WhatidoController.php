<?php

namespace App\Http\Controllers;
use App\Models\Whatido;
use Illuminate\Http\Request;


class WhatidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createwhat(Request $request)
    {
        $data = $request->all();

        $what = Whatido::create([

            
            'subtitulo' => $data['subtitulo'],
            'user_id' => intval($data['user_id']),
            'descripcion' => $data['descripcion'],
        ]);

        $what->save();
        return redirect()->to('user/'.$data['user_id'].'/edit')->with('success','Creado con exito');
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
    public function update(Request $request)
    {
        // COLOCAR EN TODOS LOS CONTROLLERS EN LA FUNCION UPDATE Y DESTROY LAS MODIFICACIONES COMO EN RedesControllers
        $data = $request->all();

        $id = intval($data['id']);

        Whatido::where('id', $id)->update(['subtitulo' => $data['subtitulo'], 'descripcion' => $data['descripcion']]);
        $what = Whatido::where('id', $id)->limit(1)->get();
        return redirect()->to('user/'.$what[0]->user_id.'/edit')->with('success','Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = $request->all();

        $id = intval($data['id']);
        $what = Whatido::where('id', $id)->get();
        Whatido::where('id', $id)->delete();
        return redirect()->to('user/'.$what[0]->user_id.'/edit')->with('success','Se ha borrado con exito');
        //return redirect()->to('my-portfolio')->with('danger', 'Se ha borrado con exito');
    }
}
