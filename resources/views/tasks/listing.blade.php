@extends('layouts.master')
@section('content')

<h1>Task Listing</h1>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<button class="btn btn-primary mb-3" onclick="window.location='{{ route('tasks.create') }}'">Create New Task</button>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection