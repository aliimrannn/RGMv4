@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-dark">{{ $researchGrant->ProjectTitle }}</h1>

        <!-- Grant Details Section -->
        <div class="card mb-4 shadow">
            <div class="card-body">
                <h3 class="card-title text-secondary">Grant Details</h3>
                <p><strong>Grant Provider:</strong> {{ $researchGrant->GrantProvider }}</p>
                <p><strong>Grant Amount:</strong> RM {{ number_format($researchGrant->GrantAmount, 2) }}</p>
                <p><strong>Start Date:</strong> {{ $researchGrant->StartDate }}</p>
                <p><strong>Duration:</strong> {{ $researchGrant->DurationMonth }} Months</p>
                <p><strong>End Date:</strong> {{ $researchGrant->EndDate }}</p>
                <p><strong>Project Leader:</strong> {{ $researchGrant->academician->Name }}</p>
            </div>
        </div>

        <!-- Assigned Members Table -->
        <h3 class="text-secondary">Assigned Members</h3>
        @if($researchGrant->members->isEmpty())
            <p class="text-muted">No members assigned to this project.</p>
        @else
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Staff ID</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($researchGrant->members as $member)
                            <tr>
                                <td>{{ $member->Name }}</td>
                                <td>{{ $member->StaffID }}</td>
                                <td>{{ $member->Position }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Associated Milestones Table -->
        <h3 class="text-secondary">Associated Milestones</h3>
        @if($researchGrant->milestones->isEmpty())
            <p class="text-muted">No milestones associated with this project.</p>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Milestone Name</th>
                            <th>Target Completion Date</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Deliverable</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($researchGrant->milestones as $milestone)
                            <tr>
                                <td>{{ $milestone->Name }}</td>
                                <td>{{ $milestone->TargetCompletionDate }}</td>
                                <td>{{ $milestone->Status }}</td>
                                <td>{{ $milestone->Remarks }}</td>
                                <td>{{ $milestone->Deliverable }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Back Button -->
        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('research-grants.index') }}" class="btn btn-dark">Back</a>
        </div>
    </div>
@endsection
