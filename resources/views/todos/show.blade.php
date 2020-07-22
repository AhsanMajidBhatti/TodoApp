@extends('layouts.app')

@section('content')
    <a href="/">Go Back</a>
    <h3>{{$todo->text}}</h3>
    <p class="label label-danger">{{$todo->due}}</p>
    <hr>
    <p>{{$todo->body}}</p>
@endsection