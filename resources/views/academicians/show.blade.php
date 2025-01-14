@extends('layout')

@section('content')
<h1>Academician Details</h1>

<p><strong>Name:</strong> {{ $academician->Name }}</p>
<p><strong>Staff ID:</strong> {{ $academician->StaffID }}</p>
<p><strong>Email:</strong> {{ $academician->Email }}</p>
<p><strong>Position:</strong> {{ $academician->Position }}</p>
<p><strong>College:</strong> {{ $academician->College }}</p>
<p><strong>Department:</strong> {{ $academician->Department }}</p>

<a href="{{ route('academicians.index') }}" class="btn btn-primary">Back</a>
@endsection
