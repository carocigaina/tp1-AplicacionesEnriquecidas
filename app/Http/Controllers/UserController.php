<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserRequest;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('education', 'skill')->latest()->get();

        return view('admin.users.index', compact('users'));

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
    public function edit(User $user)
    {
        

        return view('admin.users.edit', compact('user'));
    }


     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userEdit(User $user)
    {
        

        return view('client.users.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
            
        if($request->file('file')){
            Storage::disk('public')->delete($user->image);
            $user->image = $request->file('file')->store('users', 'public');
            $user->save();
        }
        //about image
        if($request->file('file_image')){
            Storage::disk('public')->delete($user->about_image);
            $user->about_image = $request->file('file_image')->store('users', 'public');
            $user->save();
        }

        $user->update($request->all());
        if($user->role == 'admin'){
            
            return redirect()->to('user')->with('success', 'Tus datos fueron creados con exito');
        }else{
            return redirect()->to('my-portfolio')->with('success', 'Tus datos fueron creados con exito');
        }
        
    }
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser(UserRequest $request, User $user)
    {

        // UserRequest es un request customizable hecho con artisan

        // Validaciones en el controlador
        //   $request->validate([
        //       'name'          => 'required | min:5 | max:64',
        //       'title_job'     => 'required | min:5 | max:64',
        //       'tel'           => ' numeric | min:6',
        //       'address'       => 'min:10 | max:128',
        //       'file'          => 'image:jpg | dimensions:min_width=100,min_height=200 | size:512',
        //       'mensaje'=> ' min:5 | max:64',
        //       'image'=> 'image:jpg | dimensions:min_width=100,min_height=200 | size:512',
        //       'address'=> ' min:5 | max:64',
        //       'email'=> 'min:5 | max:64',
        //       'about'=> 'min:5 | max:64',
        //       'about_title'=> ' min:5 | max:64',
        //       'about_image'=> 'image:jpg | dimensions:min_width=100,min_height=200 | size:512',
        //       'about_button'=> ' min:5 | max:64',
        //       'what_title'=> ' min:5 | max:64',
        //       'techskill_title'=> ' min:5 | max:64',
        //       'profskill_title'=> ' min:5 | max:64',
        //       'education_title'=> 'min:5 | max:64',
        //       'work_title'=> ' min:5 | max:64',
        //   ]);


        if($request->file('file')){
            Storage::disk('public')->delete($user->image);
            $user->image = $request->file('file')->store('users', 'public');
            $user->save();
        }
        //imagen de about
        if($request->file('file_image')){
            Storage::disk('public')->delete($user->about_image);
            $user->about_image = $request->file('file_image')->store('users', 'public');
            $user->save();
        }
        $user->update($request->all());

        return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if($user->image){
            Storage::disk('public')->delete($user->image);
        }
        $user->delete();
        //about image
        if($user->about_image){
            Storage::disk('public')->delete($user->about_image);
        }


        $user->delete();
        return redirect()->to('user');
    }

    /**
     * Display a listing of the resource.
     *
     *
     */
    public function logout_user()
    {
        Auth::logout();

        return view('welcome');

    }
    /*
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function my_portfolio()
   {

       $user = User::find(Auth::user()->id)->with('education', 'skill', 'roles')->first();
       
       return view('my-portfolio', compact('user'));
       
   }

}