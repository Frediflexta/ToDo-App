@extends('layout')

@section('content')

  <h5>
    @foreach($todos as $todo)

      {{ $todo->todo }}
      <hr>

    @endforeach
  </h5>

@stop