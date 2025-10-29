@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Tasks </h2>
    <a href="{{ route('admin.tasks.create') }}" class btn-primary>Create Task</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due date</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
            <tr>
                <td><a href="{{ route('admin.tasks.show', $task) }}" >{{$task->title}}</a></td>
                <td>{{  $task->description }};
                <td>{{  $task->due_date }};
                <td>{{  $task->created_at->format ('Y-m-d H:i') }} </td>
            </tr>
            @empty
                <tr><td colspan="4" class="text-center">No tasks found</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection


