@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-title">Name : {{ $student->name }}</p>
            <p class="card-text">Address : {{ $student->address }}</p>
            <p class="card-text">Mobile : {{ $student->mobile }}</p>
        </div>
    </div>
</div>

@endsection
