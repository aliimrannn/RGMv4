@extends('layout')

@section('content')
<h1>Edit Academician</h1>

<form action="{{ route('academicians.update', $academician) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="Name" class="form-control" value="{{ $academician->Name }}" required>
    </div>

    <div class="form-group">
        <label for="StaffID">Staff ID</label>
        <input type="text" name="StaffID" class="form-control" value="{{ $academician->StaffID }}" required>
    </div>

    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" name="Email" class="form-control" value="{{ $academician->Email }}" required>
    </div>

    <div class="form-group">
        <label for="Position">Position</label>
        <input type="text" name="Position" class="form-control" value="{{ $academician->Position }}" required>
    </div>

    <div class="form-group">
        <label for="College">College</label>
        <input type="text" name="College" class="form-control" value="{{ $academician->College }}" required>
    </div>

    <div class="form-group">
        <label for="Department">Department</label>
        <input type="text" name="Department" class="form-control" value="{{ $academician->Department }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
