@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-dark">Academicians</h1>

        <!-- Academicians Table -->
        @if ($academicians->count())
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
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
                                <td class="text-start">{{ $academician->Name }}</td>
                                <td>{{ $academician->StaffID }}</td>
                                <td>{{ $academician->Email }}</td>
                                <td>
                                    <!-- Action Buttons -->
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('academicians.show', $academician) }}" class="btn btn-info btn-sm">
                                            View
                                        </a>
                                        <a href="{{ route('academicians.edit', $academician) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{ route('academicians.destroy', $academician) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this academician?');">
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
            <p class="text-muted">No academicians found.</p>
        @endif

        <!-- Add Academician Button -->
        <div class="mb-3">
            <a href="{{ route('academicians.create') }}" class="btn btn-success">Add Academician</a>
        </div>

    </div>
@endsection
