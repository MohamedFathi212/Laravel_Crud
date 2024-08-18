@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Enrolment Page</div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-title">Enroll_No : {{ $enrollments->enroll_no }}</p>
            <p class="card-text">Batch : {{ $enrollments->batch_id }}</p>
            <p class="card-text">Student : {{ $enrollments->student_id }}</p>
            <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
            <p class="card-text">Fee : {{ $enrollments->fee }}</p>
        </div>
    </div>
</div>
@endsection
