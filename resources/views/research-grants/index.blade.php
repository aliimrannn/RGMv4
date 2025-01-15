@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Research Grants</h1>

        <!-- Table to display Research Grants -->
        @if ($researchGrants->count())
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Project Title</th>
                        <th>Grant Provider</th>
                        <th>Grant Amount</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($researchGrants as $grant)
                    <tr>
                        <td class="text-center">{{ $grant->Grant_ID }}</td>
                        <td>{{ $grant->ProjectTitle }}</td> 
                        <td class="text-center">{{ $grant->GrantProvider }}</td>
                        <td class="text-center">RM {{ number_format($grant->GrantAmount, 2) }}</td>
                        <td class="text-center">{{ $grant->StartDate }}</td>
                        <td class="text-center">{{ $grant->EndDate }}</td>
                        <td class="text-center">
                            <a href="{{ route('research-grants.show', $grant) }}" class="btn btn-dark">View</a>
                            <a href="{{ route('research-grants.edit', $grant) }}" class="btn btn-dark">Edit</a>
                            <form action="{{ route('research-grants.destroy', $grant) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p>No research grants found.</p>
        @endif

        <!-- Add Research Grant Button (positioned at the bottom) -->
        <div class="mt-4">
            <a href="{{ route('research-grants.create') }}" class="btn btn-dark">Add Research Grant</a>
        </div>
    </div>
@endsection
