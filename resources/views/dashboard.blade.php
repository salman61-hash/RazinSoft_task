@extends('layouts.app')

@section('content')
    <h3>Welcome, {{ auth()->user()->name }}</h3>
    <p>Email: {{ auth()->user()->email }}</p>
@endsection

