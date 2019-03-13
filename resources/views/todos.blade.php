@extends('layout')

@section('content')
  <div class="row">
    <div class="form-group col-lg-11 col-lg-offset-6">
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
      <hr>

    @endforeach
  </h5>

@stop