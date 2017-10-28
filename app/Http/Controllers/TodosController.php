<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TodosController extends Controller
{
    
    public function index(){
        
        $todos = Todo::all();
        
        return view('todos')->with('todos',$todos);
    }


    public function store(Request $request) {

       $todo = new Todo();

        $todo->todo = $request->todo;

        $todo->save();
        
        Session::flash('success','Your todo was created');

        return redirect()->back();//ne vraca pak na index stranata

    }

    public function delete($id){

       Todo::find($id)->delete();

        Session::flash('success','Your todo was deleted');

        return redirect()->back();
    }
    
    public function edit($id) {
        
        $todo = Todo::find($id);
        
        return view('edit')->with('todo',$todo);
        
    }


    public function update(Request $request,$id){

        $todo = Todo::find($id);

        $todo->todo =  $request->todo;

        $todo->save();

        Session::flash('success','Your todo was updated');

        return redirect()->route('todos.index');
    }
    
    
    public function completed($id) {
        
        $todo = Todo::find($id);
        
        $todo->completed = 1;
        
        $todo->save();
        
        return redirect()->back();
    }
    
    
}
