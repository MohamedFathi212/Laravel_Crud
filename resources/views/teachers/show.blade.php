@extends('layout')
@section('content')


<div class="card">
    <div class="card-header">Teacher Page</div>
    <div class="card-body">

        <div class="card-body">
        <p class="card-title"> Name : {{ $teachers->name }}</p>
        <p class="card-text">  Address : {{ $teachers->address }}</p>
        <p class="card-text">  Mobile : {{ $teachers->mobile }}</p>
    </div>

    </hr>

</div>
</div>
