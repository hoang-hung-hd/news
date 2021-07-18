@extends('master')

@section('content')
    <table class="table">
        @foreach($newsAll as $new)
            <td>{{$new->title}}</td>
            <td>{{$new->content}}</td>
        @endforeach
    </table>
@endsection
