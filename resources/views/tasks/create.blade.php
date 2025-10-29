@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Create Task </h2>

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input name="title" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" ></textarea>
        </div>
        <div class="mb-3">
            <label>Due date</label>
            <input name="due_date" type="date" class="form-control" required>
        </div>
        <button class="btn btn-success">Save</button>
        <a href="{{ route('tasks.index') }}" class="btn link">Cancel</a>
    </form>
</div>

@endsession


