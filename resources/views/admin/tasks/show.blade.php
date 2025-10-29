@extends('layouts.app')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
<div class="container">
    <h2>Task Details</h2>
    <div class="mb-3"></div><strong>Title: </strong> {{  $task-> title }} </div>
    <div class="mb-3"><strong>Description: </strong> {{  $task-> description }} </div>
    <div class="mb-3"><strong>Due date: </strong> {{  $task-> due_date }} </div>
    <a href="{{ route('admin.tasks.edit', $task) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('admin.tasks.index') }}" class="btn btn-secondary">Back</a>
</div>

@endsection


