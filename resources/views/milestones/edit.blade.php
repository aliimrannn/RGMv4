@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Milestone</h1>

        <form action="{{ route('milestones.update', $milestone) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="Name" class="form-control" value="{{ $milestone->Name }}" required>
            </div>

            <!-- Research Grant Selection Section -->
            <div class="mb-3">
                <label for="Grant_ID" class="form-label">Select Research Grant</label>
                <select id="Grant_ID" name="Grant_ID" class="form-control" required>
                    <option value="">Select Grant</option>
                    @foreach($researchGrants as $researchGrant)
                        <option value="{{ $researchGrant->Grant_ID }}">
                            {{ $researchGrant->ProjectTitle }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="TargetCompletionDate">Target Completion Date</label>
                <input type="date" name="TargetCompletionDate" class="form-control" value="{{ $milestone->TargetCompletionDate }}" required>
            </div>

            <div class="form-group">
                <label for="Status">Status</label>
                <select name="Status" class="form-control" required>
                    <option value="Pending" {{ $milestone->Status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="In Progress" {{ $milestone->Status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="Completed" {{ $milestone->Status == 'Completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Remarks">Remarks</label>
                <textarea name="Remarks" class="form-control">{{ $milestone->Remarks }}</textarea>
            </div>

            <div class="form-group">
                <label for="Deliverable">Deliverable</label>
                <textarea name="Deliverable" class="form-control">{{ $milestone->Deliverable }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    <div>
@endsection
