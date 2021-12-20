<?php

namespace App\Http\Controllers;
use App\Models\Redes;
use Illuminate\Http\Request;


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
        
        //return redirect()->to('my-portfolio')->with('success', 'La red social fue creada con exito!');
        return redirect()->to('user/'.$data['user_id'].'/edit')->with('success','La red social fue creada con exito');
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
        $red = Redes::where('id', $id)->get();
        return redirect()->to('user/'.$red[0]->user_id.'/edit')->with('success','La red social fue editada con exito');

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
        $red = Redes::where('id', $id)->get();
        Redes::where('id', $id)->delete();
        return redirect()->to('user/'.$red[0]->user_id.'/edit')->with('success','La red social fue eliminada con exito');
    }
}
