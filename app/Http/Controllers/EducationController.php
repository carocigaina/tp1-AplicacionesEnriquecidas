<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
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
    public function createeducation(Request $request)
    {
        $data = $request->all();

        $education = Education::create([

            'school_name' => $data['school_name'],
            'degree' => $data['degree'],
            'user_id' => intval($data['user_id']),
            'description' => $data['description'],
            'start_date' => $data['start_date'],
            'finish_date' => $data['finish_date'],
        ]);

        $education->save();
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
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $id = intval($data['id']);

        Education::where('id', $id)->update(['school_name' => $data['school_name'],'degree' => $data['degree'],  'descripcion' => $data['descripcion'],'start_date' => $data['start_date'], 'finish_date' => $data['finish_date']]);

       // return redirect()->to('my-portfolio')->with('success', 'Se ha actualizado con exito');
       $education = Education::where('id', $id)->get();
       return redirect()->to('user/'.$education[0]->user_id.'/edit')->with('success','Se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Education $education)
    {
        $data = $request->all();

        $id = intval($data['id']);
        $education = Education::where('id', $id)->get();
        Education::where('id', $id)->delete();

        //return redirect()->to('my-portfolio')->with('danger', 'Se ha borrado con exito');
        
       return redirect()->to('user/'.$education[0]->user_id.'/edit')->with('success','Se ha eliminado con exito');
    
    }
}
