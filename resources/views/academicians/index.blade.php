@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Academicians</h1>

        <a href="{{ route('academicians.create') }}" class="btn btn-primary">Add Academician</a>

        @if ($academicians->count())
        <table class="table">
            <thead>
                <tr>
                    <th>Academician ID</th>
                    <th>Name</th>
                    <th>Staff ID</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($academicians as $academician)
                <tr>
                    <td>{{ $academician->Academician_ID }}</td>
                    <td>{{ $academician->Name }}</td>
                    <td>{{ $academician->StaffID }}</td>
                    <td>{{ $academician->Email }}</td>
                    <td>
                        <a href="{{ route('academicians.show', $academician) }}" class="btn btn-info">View</a>
                        <a href="{{ route('academicians.edit', $academician) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('academicians.destroy', $academician) }}" method="POST" style="display:inline;">
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
        <p>No academicians found.</p>
        @endif
    <div>
@endsection
