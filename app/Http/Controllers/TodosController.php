<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index(Request $request, Todos $todos)
    {
        return view('todos.index', [
            'todos' => $todos->all()
        ]);
    }

    public function store(Request $request, Todos $todo)
    {
        $todo->fill($request->all());
        $todo->save();

        return redirect('/todos')->with('success', 'Successfully added todo');
    }
}
