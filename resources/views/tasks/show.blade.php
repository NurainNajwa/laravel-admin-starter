@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Task Details</h2>

<div class="mb-3">
    <strong>Title: </strong> {{  $task-> title }} </div>
    <strong>Description: </strong> {{  $task-> description }} </div>
    <strong>Due date: </strong> {{  $task-> due_date }} </div>
    <a href="{{ route('tasks.edit') }}" class="btn link">Edit</a>
    <a href="{{ route('tasks.index') }}" class="btn link">Back</a>

</div>

@endsession


