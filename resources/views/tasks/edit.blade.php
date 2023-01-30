@extends('layouts.app')

@section('title', 'Edit '.$task->title)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Edit Task: <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></h1>
                <hr>

                <form action="/tasks/{{ $task->id }}/edit" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') ?? $task->title }}">
                        {!! $errors->first('title', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ $task->description }}</textarea>
                        {!! $errors->first('description', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
