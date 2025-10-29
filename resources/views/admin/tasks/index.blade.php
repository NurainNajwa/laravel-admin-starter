@extends('layouts.app')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

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


