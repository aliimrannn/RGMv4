@extends('layout')

@section('content')
<h1>Research Grant Details</h1>

<p><strong>Project Title:</strong> {{ $grant->ProjectTitle }}</p>
<p><strong>Grant Provider:</strong> {{ $grant->GrantProvider }}</p>
<p><strong>Grant Amount:</strong> RM {{ number_format($grant->GrantAmount, 2) }}</p>
<p><strong>Start Date:</strong> {{ $grant->StartDate }}</p>
<p><strong>Duration:</strong> {{ $grant->DurationMonth }} months</p>
<p><strong>End Date:</strong> {{ $grant->EndDate }}</p>

<a href="{{ route('research-grants.index') }}" class="btn btn-primary">Back</a>
@endsection
