@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Research Grants</h1>

        <a href="{{ route('research-grants.create') }}" class="btn btn-primary">Add Research Grant</a>

        @if ($researchGrants->count())
        <table class="table">
            <thead>
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
                    <td>{{ $grant->Grant_ID }}</td>
                    <td>{{ $grant->ProjectTitle }}</td>
                    <td>{{ $grant->GrantProvider }}</td>
                    <td>RM {{ number_format($grant->GrantAmount, 2) }}</td>
                    <td>{{ $grant->StartDate }}</td>
                    <td>{{ $grant->EndDate }}</td>
                    <td>
                        <a href="{{ route('research-grants.show', $grant) }}" class="btn btn-info">View</a>
                        <a href="{{ route('research-grants.edit', $grant) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('research-grants.destroy', $grant) }}" method="POST" style="display:inline;">
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
        <p>No research grants found.</p>
        @endif
    <div>
@endsection
