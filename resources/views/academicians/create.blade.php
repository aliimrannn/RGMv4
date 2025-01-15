@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Academician</h1>

        <form action="{{ route('academicians.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" required>
            </div>

            <div class="mb-3">
                <label for="StaffID" class="form-label">Staff ID</label>
                <input type="text" class="form-control" id="StaffID" name="StaffID" required>
            </div>

            <div class="mb-3">
                <label for="Position" class="form-label">Position</label>
                <select class="form-select" id="Position" name="Position" required>
                    <option value="Professor">Professor</option>
                    <option value="Assoc Prof.">Assoc Prof.</option>
                    <option value="Senior Lecturer">Senior Lecturer</option>
                    <option value="Lecturer">Lecturer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="Email" required>
            </div>

            <div class="mb-3">
                <label for="College" class="form-label">College</label>
                <select class="form-select" id="College" name="College" required>
                    <option value="College of Engineering (COE)">College of Engineering (COE)</option>
                    <option value="UNITEN Business School (UBS)">UNITEN Business School (UBS)</option>
                    <option value="College of Computing & Informatics (CCI)">College of Computing & Informatics (CCI)</option>
                    <option value="College of Continuing Education (CCEd)">College of Continuing Education (CCEd)</option>
                    <option value="College of Graduate Studies (COGS)">College of Graduate Studies (COGS)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Department" class="form-label">Department</label>
                <input type="text" class="form-control" id="Department" name="Department" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Create Academician</button>
        </form>
    </div>
@endsection
