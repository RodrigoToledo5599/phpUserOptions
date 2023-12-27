<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;



class TaskController extends Controller
{
    public function getAllTasks(Request $request){
        $tasks = \DB::table('tasks')->get();
        return view('Task.AllTasks',['tasks' => $tasks]);

    }





    public function AddTask(Request $request)
    {
        $task = new Task();
        $task->title = $reques->title;
        $task->description = $request->description;
        $task->name = $request->name;
        $task->save();
        return redirect('/');
    }


    public function returnTaskFromPerson()
    {
        $person = auth()->user();
        //$tasks = \DB::table('tasks')->where('user_id',$person->user_id)->get();
        return $person;

    }

}
