@extends('layouts.app')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
<div class="container">
    <h2> Edit Task </h2>

    <form method="POST" action="{{ route('admin.tasks.update', $task) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{  $task->title }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" value="{{  $task->description }}"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Due date</label>
            <input name="due_date" type="date" class="form-control" value="{{  $task->due_date }}"required>
        </div>
        <button class="btn btn-primary]">Update</button>
        <a href="{{ route('admin.tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection


