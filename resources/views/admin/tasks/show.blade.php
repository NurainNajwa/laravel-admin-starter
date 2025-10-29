@extends('layouts.app')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
<div class="container">
    <h2>Task Details</h2>

<div class="mb-3">
    <strong>Title: </strong> {{  $task-> title }} </div>
    <strong>Description: </strong> {{  $task-> description }} </div>
    <strong>Due date: </strong> {{  $task-> due_date }} </div>
    <a href="{{ route('admin.tasks.edit') }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('admin.tasks.index') }}" class="btn btn-secondary">Back</a>

</div>

@endsection


