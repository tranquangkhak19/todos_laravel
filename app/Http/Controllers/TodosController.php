<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }
    
    public function show($todoId)
    {
        //die(var_dump($todoId));
        //dd($todoId);
        $todo = Todo::find($todoId);

        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        //dd(request()->all());
        $data = request()->all();

        $todo = new Todo;
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        return redirect('/todos');
    }
}
