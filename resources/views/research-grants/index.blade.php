@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-dark">Research Grants</h1>

        <!-- Table to display Research Grants -->
        @if ($researchGrants->count())
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Project Title</th>
                            <th>Grant Provider</th>
                            <th>Grant Amount (RM)</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($researchGrants as $grant)
                            <tr>
                                <td>{{ $grant->Grant_ID }}</td>
                                <td class="text-start">{{ $grant->ProjectTitle }}</td>
                                <td>{{ $grant->GrantProvider }}</td>
                                <td>{{ number_format($grant->GrantAmount, 2) }}</td>
                                <td>{{ $grant->StartDate }}</td>
                                <td>{{ $grant->EndDate }}</td>
                                <td>
                                    <!-- Action Buttons -->
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('research-grants.show', $grant) }}" class="btn btn-info btn-sm">
                                            View
                                        </a>
                                        <a href="{{ route('research-grants.edit', $grant) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{ route('research-grants.destroy', $grant) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this research grant?');">
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
            <p class="text-muted">No research grants found.</p>
        @endif

        <!-- Add Research Grant Button -->
        <div class="mb-3">
            <a href="{{ route('research-grants.create') }}" class="btn btn-success">Add Research Grant</a>
        </div>

    </div>
@endsection
