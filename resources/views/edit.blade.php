@extends('layout')


@section('content')

    <div class="row">
        <div class="col-lg-12">

            <form action="{{route('todos.update',['id' => $todo->id])}}" method="post">

                {{csrf_field()}}

                <div class="form-group">
                <input name="todo" type="text" class="form-control input-lg" value="{{$todo->todo}}" >
                </div>
            </form>
        </div>


    </div>

    <hr>


@endsection