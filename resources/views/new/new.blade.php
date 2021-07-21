@extends('layouts.app')

@section('content')
    @foreach($newAll as $new)
        <ul>
            <li>{{$new->title}}</li>
            {{$new->content}}
        </ul>


    @endforeach
@endsection
