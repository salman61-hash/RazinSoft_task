@extends('layouts.app')
@section('content')
<head>
    <title>Profile Details</title>
</head>

<div class="container my-5">
    <h2 class="mb-4">Profile Details</h2>

    <div class="card shadow-sm">
        <div class="row g-0">
            <div class="col-md-4 text-center p-3">
                <img src="{{ asset('storage/' . $profile->profile_image) }}" class="img-fluid rounded" alt="Profile Image" style="max-width: 200px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $profile->full_name }}</p>
                    <p><strong>Email:</strong> {{ $profile->email }}</p>
                    <p><strong>Phone:</strong> {{ $profile->phone }}</p>
                    <p><strong>Address:</strong> {{ $profile->address }}</p>
                    <p><strong>Bio:</strong> {{ $profile->bio }}</p>
                    <p><strong>Hobbies:</strong> {{ $profile->hobbies }}</p>
                    <p><strong>Date of Birth:</strong> {{ $profile->date_of_birth }}</p>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('profiles.list') }}" class="btn btn-outline-primary mt-4">← Back to All Profiles</a>
</div>
@endsection
