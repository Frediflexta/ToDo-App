<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todo = Todo::all();
        return view('todos')->with('todos', $todo);
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);

        $todo->delete();
        return redirect()->back();
    }

    public function update($id)
    {
        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);
    }

    public function save(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo = $request->todo;

        $todo->save();

        return redirect()->route('todos');
    }

    public function complete($id)
    {
        $todo = Todo::find($id);
        if($todo->completed === false){
            $todo->completed = true;
        } else {
            $todo->completed = false;
        }

        $todo->save();
        return redirect()->back();
    }
}