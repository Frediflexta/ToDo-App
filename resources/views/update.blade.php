@extends('layout')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <form action="{{route('todo.save', [$todo->id])}}" method="post">
        <!-- Cross Site Request Forgery token -->
        @csrf
        <input class="form-control form-control-lg" type="text" name="todo" value="{{$todo->todo}}">
        <hr>
      </form>
    </div>
  </div>

@stop