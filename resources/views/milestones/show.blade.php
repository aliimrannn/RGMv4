@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Milestone Details</h1>

        <p><strong>Name:</strong> {{ $milestone->Name }}</p>
        <p><strong>Target Completion Date:</strong> {{ $milestone->TargetCompletionDate }}</p>
        <p><strong>Status:</strong> {{ $milestone->Status }}</p>
        <p><strong>Remarks:</strong> {{ $milestone->Remarks }}</p>
        <p><strong>Deliverable:</strong> {{ $milestone->Deliverable }}</p>
        <p><strong>Date Updated:</strong> {{ $milestone->DateUpdated }}</p>

        <a href="{{ route('milestones.index') }}" class="btn btn-primary">Back</a>
    <div>
@endsection
