@extends('layouts.app')

@section('title', $task->title)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>{{ $task->title }}</h1>
                <ul class="list-inline">
                    <li class="list-inline-item"><small>{{ $task->subject->name }}</small></li>
                    <li class="list-inline-item"><small>{{ $task->published() }}</small></li>
                </ul>
                <hr>
                <div class="task-description">
                    {{ $task->description }}
                </div>

                <ul class="list-inline">
                    <li class="list-inline-item"><a href="/tasks">Back</a></li>
                    <li class="list-inline-item"><a href="/tasks/{{ $task->id }}/edit">Edit</a></li>
                    <li class="list-inline-item">
                        <form action="/tasks/{{ $task->id }}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection