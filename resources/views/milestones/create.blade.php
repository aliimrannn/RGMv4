@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Milestone</h1>

        <form action="{{ route('milestones.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" id="Name" name="Name" class="form-control" required>
            </div>

            <!-- Research Grant Selection Section -->
            <div class="mb-3">
                <label for="Grant_ID" class="form-label">Select Research Grant</label>
                <select id="Grant_ID" name="Grant_ID" class="form-control" required>
                    <option value="">Select Grant</option>
                    @foreach($researchGrants as $researchGrant)
                        <option value="{{ $researchGrant->Grant_ID }}">
                            {{ $researchGrant->ProjectTitle }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="TargetCompletionDate" class="form-label">Target Completion Date</label>
                <input type="date" id="TargetCompletionDate" name="TargetCompletionDate" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select name="Status" id="Status" class="form-control" required>
                    <option value="Pending">Pending</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Remarks" class="form-label">Remarks</label>
                <textarea id="Remarks" name="Remarks" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="Deliverable" class="form-label">Deliverable</label>
                <textarea id="Deliverable" name="Deliverable" class="form-control"></textarea>
            </div>

        <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-success">Create Milestone</button>
        <a href="{{ route('milestones.index') }}" class="btn btn-dark">Back</a>

        </form>    
    </div>
@endsection
