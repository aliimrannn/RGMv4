@extends('layout')

@section('content')
<h1>Edit Milestone</h1>

<form action="{{ route('milestones.update', $milestone) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="Name" class="form-control" value="{{ $milestone->Name }}" required>
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
@endsection
