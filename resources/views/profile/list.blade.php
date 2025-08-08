@extends('layouts.app')

@section('content')
<head>
    <title>All Profiles</title>
</head>

<div class="container my-5">
    <h2 class="text-center mb-4">All Profiles</h2>

    <div class="row">
        @forelse($profiles as $profile)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="Profile Image"
                             class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover; border: 2px solid #ddd;">

                        <h5 class="card-title">{{ $profile->full_name }}</h5>
                        <p class="card-text mb-1"><strong>Email:</strong> {{ $profile->email }}</p>
                        <p class="card-text"><strong>Phone:</strong> {{ $profile->phone }}</p>

                        <a href="{{ route('profile.view', $profile->id) }}" class="btn btn-primary mt-2">View Details</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">No profiles found.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection
