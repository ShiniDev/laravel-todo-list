<!-- resources/views/child.blade.php -->

@extends('layouts.main')

@section('title', 'Todo List')

@section('content')
    @include('todos._addtodo')
    <table>
        <thead>
            <th>Task Name</th>
            <th>Task Notes</th>
            <th>Task Status</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
              <tr>
                  <form action="/update" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$todo->id}}" hidden>
                    <td>
                      <input type="text" name="name" id="name" value="{{$todo->name}}">
                    </td>
                    <td>
                      <textarea name="notes" id="notes" cols="20" rows="2">{{$todo->notes}}</textarea>
                    </td>
                    <td>
                      {{$todo->status}}
                    </td>
                    <td>
                      <button>test</button>
                    </td>
                  </form>
              </tr>
            @endforeach
        </tbody>
    </table>
@endsection
