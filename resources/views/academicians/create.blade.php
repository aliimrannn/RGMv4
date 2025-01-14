@extends('layout')

@section('content')
<h1>Add Academician</h1>

<form action="{{ route('academicians.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="Name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="StaffID">Staff ID</label>
        <input type="text" name="StaffID" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" name="Email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="Position">Position</label>
        <input type="text" name="Position" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="College">College</label>
        <input type="text" name="College" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="Department">Department</label>
        <input type="text" name="Department" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
