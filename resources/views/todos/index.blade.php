@extends('layouts.app')

@section('content')
<h1>Todo List</h1>
    @if (count($todo) > 0)
        @foreach ($todo as $item)
        <div class="well">
            <h3><a href="todo/{{$item->id}}">{{$item->text}}</a> <span class="label label-danger">{{$item->due}}</span> </h3>
        </div>
        @endforeach
    @endif
@endsection