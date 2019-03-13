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
}