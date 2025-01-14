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

        <!-- Project Leader Section -->
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
                    @foreach($researchGrant as $researchGrant)
                        <tr>
                            <td>{{ $researchGrant->ProjectTitle }}</td>
                            <td>{{ $researchGrant->GrantProvider }}</td>
                            <td>{{ $researchGrant->StartDate }}</td>
                            <td>{{ $researchGrant->EndDate }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>This academician is not leading any projects.</p>
        @endif

        <a href="{{ route('academicians.index') }}" class="btn btn-primary">Back</a>
    <div>
@endsection
