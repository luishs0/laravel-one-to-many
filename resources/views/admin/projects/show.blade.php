@extends('layouts.admin')

@section('content')
    <div class="container text-center mt-4 text-white">
        <h1>{{ $project->title }}</h1>
        @if ($project->cover_image)
            <img class="show-img" src="{{ asset('storage/' . $project->cover_image) }}"
                alt="{{ 'Cover image di ' . $project->title }}">
        @else
            <div class="w-50 bg-secondary py-4 text-center d-inline-block">
                No image yet
            </div>
        @endif
        <p>{{ $project->description }}</p>
        <span>{{ $project->created_at }}</span>
    </div>
@endsection
