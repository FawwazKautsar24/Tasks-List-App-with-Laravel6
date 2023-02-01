<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') ?? $task->title }}">
    {!! $errors->first('title', '<span class="invalid-feedback">:message</span>') !!}
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="3" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') ?? $task->description }}</textarea>
    {!! $errors->first('description', '<span class="invalid-feedback">:message</span>') !!}
</div>
<button type="submit" class="btn btn-primary">{{ $submit_button }}</button>
