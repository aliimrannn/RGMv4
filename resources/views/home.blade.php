@extends('layouts.app')

@section('content')
    <div class="text-center mb-5">
        <h1>Welcome to iRMC Research Grant Management System</h1>
    </div>

    <div class="row justify-content-center">
        <!-- Research Grants Section -->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <!-- Research Grants Icon -->
                    <i class="bi bi-folder-fill fs-1 text-dark"></i>
                    <h5 class="card-title mt-3">Research Grants</h5>
                    <p class="card-text">Create, Update, and View Research Grants.</p>
                    <a href="{{ route('research-grants.index') }}" class="btn btn-dark">Go to Research Grants</a>
                </div>
            </div>
        </div>

        <!-- Academicians Section -->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <!-- Academicians Icon -->
                    <i class="bi bi-people-fill fs-1 text-dark"></i>
                    <h5 class="card-title mt-3">Academicians</h5>
                    <p class="card-text">View and Manage Academic Staff.</p>
                    <a href="{{ route('academicians.index') }}" class="btn btn-dark">Go to Academicians</a>
                </div>
            </div>
        </div>

        <!-- Milestones Section -->
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <!-- Milestones Icon -->
                    <i class="bi bi-clipboard-check-fill fs-1 text-dark"></i>
                    <h5 class="card-title mt-3">Milestones</h5>
                    <p class="card-text">Track and Manage Project Milestones.</p>
                    <a href="{{ route('milestones.index') }}" class="btn btn-dark">Go to Milestones</a>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
