<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use App\role;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3)->sortByDesc('created_at');
        $datas =  Role::where('status', '=' ,'active')->lists('name', 'id');

        return view('dashboard/users/users',compact('users','datas'));
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
      $this->validate($request, [
            
            'username' => 'required',
            'email' => 'required',

        
        ]);

        $input = $request->all();

        User::create($input);

        return redirect('/admin/users');
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
         $users  = user::find($id);
        return view('dashboard/tasks/edit',compact('users'));
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
        $user = User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->username=$request->input('username');
        $user->job_description=$request->input('job_description');
        $user->password=$request->input('password');
         $user->no_hp=$request->input('no_hp');
          $user->role_id=$request->input('role_id');
        $user->save();
        Session::flash('message', 'Successfully updated the user!');
        return redirect('/admin/users');
    }

    public function profile()
    {
         
        return view('dashboard/users/profile');
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
        $user->delete();

        Session::flash('message', 'Successfully deleted the user!');
        return redirect('/admin/users');
    }
}
