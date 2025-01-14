@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Milestone</h1>

        <form action="{{ route('milestones.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="Name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="TargetCompletionDate">Target Completion Date</label>
                <input type="date" name="TargetCompletionDate" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Status">Status</label>
                <select name="Status" class="form-control" required>
                    <option value="Pending">Pending</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Remarks">Remarks</label>
                <textarea name="Remarks" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="Deliverable">Deliverable</label>
                <textarea name="Deliverable" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    <div>
@endsection
