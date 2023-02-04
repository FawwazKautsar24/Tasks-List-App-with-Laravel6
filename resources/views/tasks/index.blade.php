@extends('layouts.app')

@section('title', 'All Tasks')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Create a Task</h1>
                <hr>
                <form action="" method="POST" autocomplete="off">
                    @csrf
                    @include('tasks.partials.form', [
                        'task' => new App\Task,
                        'submit_button' => 'Add'
                    ])
                </form>
            </div>

            <div class="col-md-6">
                @include('tasks.partials.sidebar')
            </div>
        </div>
    </div>
@endsection