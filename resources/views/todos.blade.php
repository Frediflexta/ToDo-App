@extends('layout')

@section('content')

    <div class="form-group col-lg-6 col-lg-offset-6">
      <form action="/create/todo" method="post">
        @csrf
        <input class="form-control form-control-lg" type="text" name="todo" placeholder="Create new todo">
      </form>
     </div>

  <h5>
    @foreach($todos as $todo)

      {{ $todo->todo }}
      <hr>

    @endforeach
  </h5>

@stop