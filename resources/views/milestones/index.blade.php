@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Milestones</h1>

        <a href="{{ route('milestones.create') }}" class="btn btn-primary">Add Milestone</a>

        @if ($milestones->count())
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Target Completion Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($milestones as $milestone)
                <tr>
                    <td>{{ $milestone->Milestone_ID }}</td>
                    <td>{{ $milestone->Name }}</td>
                    <td>{{ $milestone->TargetCompletionDate }}</td>
                    <td>{{ $milestone->Status }}</td>
                    <td>
                        <a href="{{ route('milestones.show', $milestone) }}" class="btn btn-info">View</a>
                        <a href="{{ route('milestones.edit', $milestone) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('milestones.destroy', $milestone) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No milestones found.</p>
        @endif
<div>
@endsection
