<!-- resources/views/child.blade.php -->
 
@extends('layouts.main')
 
@section('title', 'Todo List')
 
@section('content')
  @foreach ($todos as $todo)
    <div>
      <h1>{{ $todo->todo }}</h1>
    </div>    
  @endforeach
@endsection