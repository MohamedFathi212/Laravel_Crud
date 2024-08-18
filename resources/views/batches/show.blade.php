@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Batch Page</div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-title">Name : {{ $batches->name }}</p>
            <p class="card-text">Syllabus : {{ $batches->course_id }}</p>
            <p class="card-text">Duration : {{ $batches->start_date }}</p>
        </div>
    </div>
</div>

@endsection
