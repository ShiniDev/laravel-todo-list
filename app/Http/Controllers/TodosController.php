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

    public function create(Request $request, Todos $todo)
    {
        $request->merge([
            'status' => "waiting" // Prevent creating task with invalid default value
        ]);
        $todo->fill($request->all());
        $todo->save();

        return redirect('/')->with('success', 'Successfully added todo');
    }

    public function update(Request $request, Todos $todo)
    {
        return redirect('/')->with('success', 'Updated todo');
    }
}
