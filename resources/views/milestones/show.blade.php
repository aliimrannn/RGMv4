@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-dark">{{ $milestone->Name }}</h1>

        <!-- Milestone Details Section -->
        <div class="card mb-4 shadow">
            <div class="card-body">
                <h3 class="card-title text-secondary">Milestone Details</h3>
                <p><strong>Research Grant:</strong> {{ $milestone->researchGrant->ProjectTitle }}</p>
                <p><strong>Target Completion Date:</strong> {{ $milestone->TargetCompletionDate }}</p>
                <p><strong>Status:</strong> {{ $milestone->Status }}</p>
                <p><strong>Remarks:</strong> {{ $milestone->Remarks }}</p>
                <p><strong>Deliverable:</strong> {{ $milestone->Deliverable }}</p>
                <p><strong>Date Updated:</strong> {{ $milestone->DateUpdated }}</p>
            </div>
        </div>

        <!-- Research Grant Details Section -->
        <h3 class="text-secondary">Research Grant</h3>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Project Title</th>
                        <th>Grant Provider</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Grant Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start">{{ $milestone->researchGrant->ProjectTitle }}</td>
                        <td>{{ $milestone->researchGrant->GrantProvider }}</td>
                        <td>{{ $milestone->researchGrant->StartDate }}</td>
                        <td>{{ $milestone->researchGrant->EndDate }}</td>
                        <td>{{ $milestone->researchGrant->GrantAmount }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Back Button -->
        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('milestones.index') }}" class="btn btn-dark">Back</a>
        </div>
    </div>
@endsection
