<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redes;

class RedesController extends Controller
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
        $data=$request->all();
        
        $redes=Redes::create([ 
        
            'name'=>$data['name'],
            'url'=>$data['url'],
            'user_id'=>intval($data['user_id']),
            'percent'=> 50
         ]);

         $redes->save();
        
        return redirect()->to('my-portfolio')->with('success', 'La red social fue creada con exito!');
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
        $data = $request->all();
        $id = intval($data['id']);

        Redes::where('id', $id)->update(['name' => $data['name'], 'url' => $data['url']]);

        return redirect()->to('my-portfolio')->with('success', 'La red social fue editada con exito');
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

        Redes::where('id', $id)->delete();
        return redirect()->to('my-portfolio')->with('danger','La red social fue borrada con exito');
    }
}
