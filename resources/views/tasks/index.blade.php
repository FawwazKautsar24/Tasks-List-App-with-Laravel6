@extends('layouts.app')

@section('title', 'All Tasks')
@section('content')
    <div class="container">
        <h1>Tasks</h1>

        <ol style="margin-left: -30px">
            @foreach ($tasks as $task)
                <li>{{ $task->title }}</li>
            @endforeach
        </ol>

        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection