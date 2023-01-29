@extends('layouts.app')

@section('title', $task->title)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>{{ $task->title }}</h1>
                <hr>
                <div class="task-description">
                    {{ $task->description }}
                </div>
                <a href="/tasks">Back</a>
            </div>
        </div>
    </div>
@endsection