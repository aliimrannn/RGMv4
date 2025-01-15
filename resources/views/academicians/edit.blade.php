@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Academician</h1>

        <form action="{{ route('academicians.update', $academician) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" name="Name" class="form-control" value="{{ $academician->Name }}" required>
            </div>

            <div class="mb-3">
                <label for="StaffID">Staff ID</label>
                <input type="text" name="StaffID" class="form-control" value="{{ $academician->StaffID }}" required>
            </div>

            <div class="mb-3">
                <label for="Email">Email</label>
                <input type="email" name="Email" class="form-control" value="{{ $academician->Email }}" required>
            </div>

            <div class="mb-3">
                <label for="Position">Position</label>
                <select name="Position" class="form-control" required>
                    <option value="Professor" {{ $academician->Position == 'Professor' ? 'selected' : '' }}>Professor</option>
                    <option value="Assoc Prof." {{ $academician->Position == 'Assoc Prof.' ? 'selected' : '' }}>Assoc Prof.</option>
                    <option value="Senior Lecturer" {{ $academician->Position == 'Senior Lecturer' ? 'selected' : '' }}>Senior Lecturer</option>
                    <option value="Lecturer" {{ $academician->Position == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="College">College</label>
                <select name="College" class="form-control" required>
                    <option value="College of Engineering (COE)" {{ $academician->College == 'College of Engineering (COE)' ? 'selected' : '' }}>College of Engineering (COE)</option>
                    <option value="UNITEN Business School (UBS)" {{ $academician->College == 'UNITEN Business School (UBS)' ? 'selected' : '' }}>UNITEN Business School (UBS)</option>
                    <option value="College of Computing & Informatics (CCI)" {{ $academician->College == 'College of Computing & Informatics (CCI)' ? 'selected' : '' }}>College of Computing & Informatics (CCI)</option>
                    <option value="College of Continuing Education (CCEd)" {{ $academician->College == 'College of Continuing Education (CCEd)' ? 'selected' : '' }}>College of Continuing Education (CCEd)</option>
                    <option value="College of Graduate Studies (COGS)" {{ $academician->College == 'College of Graduate Studies (COGS)' ? 'selected' : '' }}>College of Graduate Studies (COGS)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Department">Department</label>
                <input type="text" name="Department" class="form-control" value="{{ $academician->Department }}" required>
            </div>

            <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-success">Update Academician</button>
            <a href="{{ route('academicians.index') }}" class="btn btn-dark">Back</a>

        </form>
    </div>
@endsection
