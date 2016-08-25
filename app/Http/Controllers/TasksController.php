<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use Session;

use Gate;



class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $tasks = Task::all();

        return view('dashboard/tasks/list',compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard/tasks/new');
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
            
            'priority' => 'required',
             
              
            

        ]);

        $input = $request->all();

        Task::create($input);

        return redirect('/admin/tasks');
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
        $task  = task::find($id);
        return view('dashboard/tasks/edit',compact('task'));
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
        $task = task::find($id);
        if (Gate::denies('update', $task)) {
            abort(403);
        }

        $task->title=$request->input('title');
        $task->priority=$request->input('priority');
        $task->efectivity=$request->input('efectivity');
        $task->description=$request->input('description');
        $task->save();
        Session::flash('message', 'Successfully deleted the task!');
        return redirect('/admin/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task  = task::find($id);
        $task->delete();

        Session::flash('message', 'Successfully deleted the task!');
        return redirect('/admin/tasks');
    }
}
