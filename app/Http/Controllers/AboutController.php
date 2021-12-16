<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
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
        
        $about=About::create([ 
        
            'name'=>$data['name'],
            
            'user_id'=>intval($data['user_id']),
            
         ]);

         $about->save();
        
        
        return redirect()->to('user/'.$data['user_id'].'/edit')->with('success','El campo de about fue creado con exito');
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

        About::where('id', $id)->update(['name' => $data['name']]);

        return redirect()->to('my-portfolio')->with('success', 'El about fue editado con exito');
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

        About::where('id', $id)->delete();
        return redirect()->to('my-portfolio')->with('danger','El about fue borrado con exito');
    }
}
