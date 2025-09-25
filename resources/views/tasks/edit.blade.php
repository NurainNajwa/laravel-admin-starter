@extends('layouts.master')
@section('content')

<h1>Edit Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $task->title) }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{$task->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Task</button>
@endsection