@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
    <div class="container">
        <h1>Hello my name is {!! $name !!}</h1>

        @php
            $no = 1;
        @endphp
        @foreach ($tasks as $task)
            {{ $no }} - {{ $task->title }} <br>
            @php ++$no @endphp
        @endforeach
    </div>
@endsection
