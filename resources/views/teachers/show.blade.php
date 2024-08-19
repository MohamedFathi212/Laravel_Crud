@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">Teacher Page</div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-title"> Name : {{ $teacher->name }}</p>
            <p class="card-text"> Address : {{ $teacher->address }}</p>
            <p class="card-text"> Mobile : {{ $teacher->mobile }}</p>
        </div>
    </div>
</div>

@endsection
