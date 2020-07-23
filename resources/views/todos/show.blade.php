@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-primary">Go Back</a>
    <h3>{{$todo->text}}</h3>
    <p class="label label-danger">{{$todo->due}}</p>
    <hr>
    <p>{{$todo->body}}</p>
    <a class="btn btn-default" href="/todo/{{$todo->id}}/edit">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => "pull-right"]) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection