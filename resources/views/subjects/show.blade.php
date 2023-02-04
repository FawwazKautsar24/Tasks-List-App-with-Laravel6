@extends('layouts.app')

@section('title', $subject->name)
@section('content')
    <div class="container">
        <h1>{{ $subject->name }}</h1>
        @foreach ($tasks as $task)
            <p><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></p>
        @endforeach
    </div>
@endsection
