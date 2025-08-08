<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RazinSoft Internship</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">RazinSoft</a>
        <div class="d-flex">
            <a href="{{ route('profile.create') }}" class="btn btn-outline-light btn-sm me-2">Create Profile</a>
            <a href="{{ route('profile.my') }}" class="btn btn-outline-light btn-sm me-2">My Profile</a>
            <a href="{{ route('profiles.list') }}" class="btn btn-outline-light btn-sm me-2">All Profiles</a>
            <a href="{{ route('logout') }}" class="btn btn-outline-warning btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
