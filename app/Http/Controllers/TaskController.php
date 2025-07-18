<?php

namespace App\Http\Controllers;


use App\Models\category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function createPage(){
        $catogories=Category::where('user_id',Auth::user()->id)->get();
        return view('panel.tasks.create',compact('catogories'));


    }
 public function addTask(request $request){
         //dump and die VEriyi at ve işlemi durdur
        //dd($request->all());
        // validasyon doğrulama

     //validasyon doğrulama
     $request->validate([
            'title' => 'required|min:3|max:20',
        ]);
       $task = new  Task();
       $task->category_id=$request->category;
       $task->title = $request->title;
       $task->content = $request->content;
       $task->status = $request->status;
       $task->deadline = $request->deadline;
       $task->save();
         return redirect()->route('panel.indextasks')->with('success','Görev Başarıyla  Eklendi ');

    }
    public function indexPage(){

       //elea
       //$tasks=Task::get();
       $user=Auth::user();
       $tasks=$user->gettasks();

     return view('panel.tasks.index',compact('tasks'));


    }

}
