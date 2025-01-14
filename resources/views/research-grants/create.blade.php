@extends('layouts.app')

@section('content')
    <div class="container"> 
        <h1>Add Research Grant</h1>

        <form action="{{ route('research-grants.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ProjectTitle">Project Title</label>
                <input type="text" name="ProjectTitle" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="GrantProvider">Grant Provider</label>
                <input type="text" name="GrantProvider" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="GrantAmount">Grant Amount</label>
                <input type="number" name="GrantAmount" class="form-control" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="StartDate">Start Date</label>
                <input type="date" name="StartDate" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="DurationMonth">Duration (Months)</label>
                <input type="number" name="DurationMonth" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="EndDate">End Date</label>
                <input type="date" name="EndDate" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    <div>
@endsection
