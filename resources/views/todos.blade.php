@extends('layout')


@section('content')

  <div class="row">
      <div class="col-lg-offset-3 col-lg-6">

          <form action="{{route('todos.create')}}" method="post">

              {{csrf_field()}}

          <input name="todo" type="text" class="form-control input-lg" placeholder="Create new todo">


          </form>
      </div>


  </div>

    <hr>
    @foreach($todos as $todo)
        {{$todo->todo}}

        <a href="{{route('todos.delete',['id' =>$todo->id])}}" class="btn btn-danger">X</a>

        <a href="{{route('todos.edit',['id' =>$todo->id])}}" class="btn btn-warning">Edit</a>

        <hr>
    @endforeach

@endsection
