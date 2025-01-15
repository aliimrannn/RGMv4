@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-dark">Milestones</h1>

        <!-- Milestones Table -->
        @if ($milestones->count())
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Milestone ID</th>
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
                                    <!-- Action Buttons -->
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('milestones.show', $milestone) }}" class="btn btn-info btn-sm">
                                            View
                                        </a>
                                        <a href="{{ route('milestones.edit', $milestone) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{ route('milestones.destroy', $milestone) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this milestone?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted">No milestones found.</p>
        @endif

            <!-- Add Milestone Button -->
            <div class="mb-3">
            <a href="{{ route('milestones.create') }}" class="btn btn-success">Add Milestone</a>
        </div>

    </div>
@endsection
