@extends('layout.base')

@section('title', 'Todo List')

@section('content')
@if($msg)
  <p>{{$msg}}</p>
@endif
@include('tasks._add_task')
@include('tasks._tasks')
@endsection