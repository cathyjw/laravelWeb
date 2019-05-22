@extends('layout.app')

@section('container')

    <h1>Contact Page</h1>
    
    @if (count($people))
        <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
        </ul>
    @endif
@stop

@section('footer')
    
@stop