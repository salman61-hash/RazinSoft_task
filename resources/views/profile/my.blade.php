@extends('layouts.app')

@section('content')
<head>
    <title>My Profile</title>
</head>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($profile)
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white text-center">
                        <h4>My Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="Profile Image" class="rounded-circle shadow" width="150" height="150" style="object-fit: cover; border: 3px solid #ddd;">
                        </div>

                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <td>{{ $profile->full_name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $profile->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $profile->phone }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $profile->address }}</td>
                            </tr>
                            <tr>
                                <th>Bio</th>
                                <td>{{ $profile->bio }}</td>
                            </tr>
                            <tr>
                                <th>Hobbies</th>
                                <td>{{ $profile->hobbies }}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ $profile->date_of_birth }}</td>
                            </tr>
                        </table>

                        <div class="text-center mt-4">
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary">← Back to Dashboard</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-warning text-center">
                    No profile found.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
