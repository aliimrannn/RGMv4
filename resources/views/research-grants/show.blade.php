@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $researchGrant->ProjectTitle }}</h1>
        <p><strong>Grant Provider:</strong> {{ $researchGrant->GrantProvider }}</p>
        <p><strong>Grant Amount:</strong> {{ $researchGrant->GrantAmount }}</p>
        <p><strong>Start Date:</strong> {{ $researchGrant->StartDate }}</p>
        <p><strong>Duration (Months):</strong> {{ $researchGrant->DurationMonth }}</p>
        <p><strong>End Date:</strong> {{ $researchGrant->EndDate }}</p>
        <p><strong>Project Leader:</strong> {{ $researchGrant->academician->Name }}</p> <!-- Assuming the relationship is defined -->
    </div>

            <!-- Milestones Table -->
            <h3>Associated Milestones</h3>
        @if($researchGrant->milestones->isEmpty())
            <p>No milestones associated with this project.</p>
        @else
            <table class="table">
                <thead>
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
        @endif
    </div>
@endsection
