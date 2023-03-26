@extends('layouts.app')
@section('content')
<div class="container d-flex flex-wrap gap-3">
    @auth
    <span class="font-italic w-100">
        Welcome, {{auth()->user()->name}}!
    </span>
    @endauth
    @foreach ($pois as $poi)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $poi->name }}</h5>
            <a href="/pois/{{ $poi->id }}/edit" class="btn btn-primary">Edit</a>
            </div>
        </div>
    @endforeach
</div>

@endsection
