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

        {{--ako ne e kompletirano(odnosno ako e 0) sakame da se pojavi linkot koj ne nosi do TodosController@completed so post metoda vo routes kade gi promenuvame vo completed(1) --}}
        @if(!$todo->completed)

        <a href="{{route('todos.completed',['id' =>$todo->id])}} " class="btn btn-success">Mark as Completed</a>

        {{--ako ne e kompletirano(odnosno ako e 1) sakame da se pojavi span so tekst completed --}}
                    @else <span class="text-success"><strong>Completed</strong></span>


                @endif

                <hr>
            @endforeach

        @endsection
