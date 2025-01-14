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
@endsection
