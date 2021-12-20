<?php

namespace App\Http\Controllers;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creatework(Request $request)
    {
        $data = $request->all();

        $work = Work::create([

            'work_name' => $data['work_name'],
            'lugar' => $data['lugar'],
            'user_id' => intval($data['user_id']),
            'tareas' => $data['tareas'],
            'start_date' => $data['start_date'],
            'finish_date' => $data['finish_date'],
        ]);

        $work->save();
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
        $data = $request->all();

        $id = intval($data['id']);

        Work::where('id', $id)->update(['work_name' => $data['work_name'],'lugar' => $data['lugar'],  'tareas' => $data['tareas'],'start_date' => $data['start_date'], 'finish_date' => $data['finish_date']]);
        $work = Work::where('id', $id)->get();
        return redirect()->to('user/'.$work[0]->user_id.'/edit')->with('success','El trabajo fue actualizado con exito');
        //return redirect()->to('my-portfolio')->with('success', 'Se ha actualizado con exito');
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
        $red = Work::where('id', $id)->get();
        Work::where('id', $id)->delete();
        return redirect()->to('user/'.$red[0]->user_id.'/edit')->with('success','El trabajo fue eliminado con exito');
        //return redirect()->to('my-portfolio')->with('danger', 'Se ha borrado con exito');
    }
}
