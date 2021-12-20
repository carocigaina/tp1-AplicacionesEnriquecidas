<?php

namespace App\Http\Controllers;
use App\Models\Profskill;
use Illuminate\Http\Request;

class ProfskillController extends Controller
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
        
        $profskill=Profskill::create([ 
        
            'name'=>$data['name'],
            'user_id'=>intval($data['user_id']),
            'percent'=> $data['percent'],
         ]);

         $profskill->save();
        return redirect()->to('user/'.$data['user_id'].'/edit')->with('success','Habilidad creada con exito');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProfskill(Request $request)
    {
        $data=$request->all();
        
        $profskill=Profskill::create([ 
        
            'name'=>$data['name'],
            'user_id'=>intval($data['user_id']),
            'percent'=> $data['percent'],
         ]);

         $profskill->save();
        return redirect()->to('my-portfolio')->with('success','Habilidad creada con exito');
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
        //$profskill->update($request->all());
        //return redirect()->to('user/'.$profskill->user_id.'/edit')->with('sucess','Habilidad modificada con exito');
        $data = $request->all();
        $id = intval($data['id']);
        
        Profskill::where('id', $id)->update(['name' => $data['name'], 'user' => $data['user'], 'percent' => $data['percent']]);
        $profskill = Profskill::where('id', $id)->get();
        return redirect()->to('user/'.$profskill[0]->user_id.'/edit')->with('success','El profesional skill fue editado con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //$id=$profskill->user_id;
        ///$profskill =Profskill::find($profskill->id);
        //$profskill->delete();
        //return redirect()->to('user/'.$id.'/edit')->with('danger','Habilidad borrada con exito');
        $data = $request->all();

        $id = intval($data['id']);
        $profskill = Profskill::where('id', $id)->get();
        Profskill::where('id', $id)->delete();
        return redirect()->to('user/'.$profskill[0]->user_id.'/edit')->with('success','Eñ profesional skill fue eliminado con exito');
    }
}
