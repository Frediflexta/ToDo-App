@extends('layout')

@section('content')
  <div class="row">
    <div class="form-group col-lg-12 col-lg-offset-6">
      <form action="/create/todo" method="post">
       <!-- Cross Site Request Forgery token -->
        @csrf
        <input class="form-control form-control-lg" type="text" name="todo" placeholder="Create new todo">
      </form>
    </div>
  </div>

  <h5>
    @foreach($todos as $todo)

      {{ $todo->todo }}  <a href="{{route('todo.delete', [$todo->id])}}" class="btn btn-danger">X</a>
      <a href="{{route('todo.update', [$todo->id])}}" class="btn btn-info">update</a>

      @if(!$todo->completed)
      <a href="{{route('todo.completed', [$todo->id])}}" class="btn btn-primary">Mark as Completed</a>

      @else
      <del><a href="{{route('todo.completed', [$todo->id])}}" class="btn btn-success">Completed</a></del>
      @endif
      <hr>

    @endforeach
  </h5>

@stop