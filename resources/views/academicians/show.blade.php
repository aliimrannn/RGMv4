@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-dark">{{ $academician->Name }}</h1>

        <!-- Academician Details Section -->
        <div class="card mb-4 shadow">
            <div class="card-body">
                <h3 class="card-title text-secondary">Academician Details</h3>
                <p><strong>Staff ID:</strong> {{ $academician->StaffID }}</p>
                <p><strong>Email:</strong> {{ $academician->Email }}</p>
                <p><strong>Position:</strong> {{ $academician->Position }}</p>
                <p><strong>College:</strong> {{ $academician->College }}</p>
                <p><strong>Department:</strong> {{ $academician->Department }}</p>
            </div>
        </div>

        <!-- Projects Leading Section -->
        <h3 class="text-secondary">Project Leader</h3>
        @if($researchGrant->isEmpty())
            <p class="text-muted">This academician is not leading any projects.</p>
        @else
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Project Title</th>
                            <th>Grant Provider</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($researchGrant as $grant)
                            <tr>
                                <td class="text-start">{{ $grant->ProjectTitle }}</td>
                                <td>{{ $grant->GrantProvider }}</td>
                                <td>{{ $grant->StartDate }}</td>
                                <td>{{ $grant->EndDate }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Research Grants as a Member Section -->
        <h3 class="text-secondary">Project Member</h3>
        @if($memberGrants->isEmpty())
            <p class="text-muted">This academician is not a member of any research grants.</p>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Project Title</th>
                            <th>Grant Provider</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Project Leader</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($memberGrants as $memberGrant)
                            <tr>
                                <td class="text-start">{{ $memberGrant->ProjectTitle }}</td>
                                <td>{{ $memberGrant->GrantProvider }}</td>
                                <td>{{ $memberGrant->StartDate }}</td>
                                <td>{{ $memberGrant->EndDate }}</td>
                                <td>{{ $memberGrant->academician->Name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Back Button -->
        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('academicians.index') }}" class="btn btn-dark">Back</a>
        </div>
    </div>
@endsection
