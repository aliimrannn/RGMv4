@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Academician Details</h1>

        <p><strong>Name:</strong> {{ $academician->Name }}</p>
        <p><strong>Staff ID:</strong> {{ $academician->StaffID }}</p>
        <p><strong>Email:</strong> {{ $academician->Email }}</p>
        <p><strong>Position:</strong> {{ $academician->Position }}</p>
        <p><strong>College:</strong> {{ $academician->College }}</p>
        <p><strong>Department:</strong> {{ $academician->Department }}</p>

        <!-- Project Leading Section -->
        @if($researchGrant->isNotEmpty())
            <h3>Project Leading</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Project Title</th>
                        <th>Grant Provider</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($researchGrant as $grant)
                        <tr>
                            <td>{{ $grant->ProjectTitle }}</td>
                            <td>{{ $grant->GrantProvider }}</td>
                            <td>{{ $grant->StartDate }}</td>
                            <td>{{ $grant->EndDate }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>This academician is not leading any projects.</p>
        @endif

        <!-- Member of Research Grants Section -->
        @if($memberGrants->isNotEmpty())
            <h3>Research Grants as a Member</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Project Title</th>
                        <th>Grant Provider</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Project Leader</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($memberGrants as $memberGrant)
                        <tr>
                            <td>{{ $memberGrant->ProjectTitle }}</td>
                            <td>{{ $memberGrant->GrantProvider }}</td>
                            <td>{{ $memberGrant->StartDate }}</td>
                            <td>{{ $memberGrant->EndDate }}</td>
                            <td>{{ $memberGrant->academician->Name }}</td> <!-- Assuming relationship defined -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>This academician is not a member of any research grants.</p>
        @endif

        <a href="{{ route('academicians.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
