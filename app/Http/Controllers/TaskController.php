<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => Task::all(),
            'msg' => session('msg', null),
        ]);
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->fill($request->all());
        $task->status = 'waiting';
        $task->save();

        session()->flash('msg', 'Successfully added');

        return redirect()->route('tasks.index');
    }

    public function update(Request $request, Task $task)
    {
        session()->flash('msg', 'Updated successfully');
        if ($request->start) {
            $task->status = 'on-going';
        } else if ($request->finish) {
            $task->status = 'finished';
        } else if ($request->delete) {
            $task->status = 'deleted';
            $request->merge(['name' => $task->name]);
            session()->flash('msg', 'Deleted successfully');
            // We won't actually delete the task
        }
        $task->name = $request->name;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function destroy(Request $request, Task $task)
    {
        $task->delete();
        session()->flash('msg', 'Deleted successfully');

        return redirect()->route('tasks.index');
    }
}
