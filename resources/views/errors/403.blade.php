@extends('errors.app')

@section('title', '403 - FORBIDDEN')

@section('content')

<div class="error-page container">
    <div class="col-md-8 col-12 offset-md-2">
        <img class="img-error" src="{{ asset('assets/images/samples/error-403.png')}}" alt="Not Found">
        <div class="text-center">
            <h1 class="error-title">Forbidden</h1>
            <p class="fs-5 text-gray-600">You are unauthorized to see this page.</p>
            <a href="{{route('home')}}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
        </div>
    </div>
</div>
@endsection