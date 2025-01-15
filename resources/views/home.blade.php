@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Welcome to the Research Grant Management System</h1>
        <p>Navigate to the sections below to manage the application:</p>
        <div class="d-grid gap-3 mt-4">
            <a href="{{ route('academicians.index') }}" class="btn btn-primary btn-lg">Manage Academicians</a>
            <a href="{{ route('research-grants.index') }}" class="btn btn-secondary btn-lg">Manage Research Grants</a>
            <a href="{{ route('milestones.index') }}" class="btn btn-success btn-lg">Manage Milestones</a>
        </div>
    </div>
@endsection
