<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
         $task=new Task();
         $this->validate($request,[
             'task'=>'required|max:100|min:5',
         ]);
         $task->task=$request->task;
         $task->save();
        $data=Task::all();
        return view('dailytask')->with('task',$data);
         //return redirect()->back();
    }

    public function updatetask($id)
    {
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();

    }
}
