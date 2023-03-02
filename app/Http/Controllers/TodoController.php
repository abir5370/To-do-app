<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todo.index',[
            'todos'=>$todos
        ]);
    }
    public function create(){
        return view('todo.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|min:6|max:20',
            'desp'=>'required'
        ]);
        Todo::insert([
            'name'=>$request->name,
            'desp'=>$request->desp,
            'completed'=>false,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','todo create successfull!');
    }
    public function details($todo_id){
        $detais = Todo::find($todo_id);
        return view('todo.details',[
            'detais'=>$detais,
        ]);
    }
    public function edit($todo_id){
        $todo = Todo::find($todo_id);
        return view('todo.edit',[
            'todo'=>$todo,
        ]);
    }
    public function update(Request $request,$todo_id){
        Todo::find($todo_id)->update([
            'name'=>$request->name,
            'desp'=>$request->desp,
            'completed'=>false,
        ]);
        return redirect('index')->with('success','todo updated!');
    }
    public function destroy($todo_id){
        $todo = Todo::find($todo_id);
        $todo->delete();
        return redirect('index')->with('success','todo deleted');
    }
    public function complete($complete_id){
        Todo::find($complete_id)->update([
            'completed'=>true,
        ]);
        return back();
    }
}
