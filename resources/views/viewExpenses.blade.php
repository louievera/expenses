@extends('layouts.app')

@include('includes.sidebar')

@section('content')
    <div id="app">
        <expenses :userid = "{{Auth::user()->id}}" ></expenses>                        
    </div>

@endsection
