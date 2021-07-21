@extends('layouts.app')

@section('content')
    @foreach($technologies as $technology)
    <ul>
        <li> <strong>Title : {{$technology->title}}</strong></li>
         Content : {{$technology->content}}
        <li>Link: {{$technology->link}}</li>
        Image : {{$technology->image}}
        <li>Author :{{$technology->author}}</li>

    </ul>
    @endforeach
@endsection
