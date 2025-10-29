@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Tasks </h2>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="{{ route('tasks.show', $task) }}" >{{$task->title}}</a></td>
                td>{{  $task->description }};
                <td>{{  $task->due_date }};
            </tr>
        </tbody>


</div>

@endsession


