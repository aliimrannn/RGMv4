@extends('layout')

@section('content')
<h1>Edit Research Grant</h1>

<form action="{{ route('research-grants.update', $grant) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="ProjectTitle">Project Title</label>
        <input type="text" name="ProjectTitle" class="form-control" value="{{ $grant->ProjectTitle }}" required>
    </div>

    <div class="form-group">
        <label for="GrantProvider">Grant Provider</label>
        <input type="text" name="GrantProvider" class="form-control" value="{{ $grant->GrantProvider }}" required>
    </div>

    <div class="form-group">
        <label for="GrantAmount">Grant Amount</label>
        <input type="number" name="GrantAmount" class="form-control" step="0.01" value="{{ $grant->GrantAmount }}" required>
    </div>

    <div class="form-group">
        <label for="StartDate">Start Date</label>
        <input type="date" name="StartDate" class="form-control" value="{{ $grant->StartDate }}" required>
    </div>

    <div class="form-group">
        <label for="DurationMonth">Duration (Months)</label>
        <input type="number" name="DurationMonth" class="form-control" value="{{ $grant->DurationMonth }}" required>
    </div>

    <div class="form-group">
        <label for="EndDate">End Date</label>
        <input type="date" name="EndDate" class="form-control" value="{{ $grant->EndDate }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
