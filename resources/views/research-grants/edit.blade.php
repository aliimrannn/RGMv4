@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Research Grant</h1>

        <form action="{{ route('research-grants.update', $researchGrant) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="ProjectTitle">Project Title</label>
                <input type="text" name="ProjectTitle" class="form-control" value="{{ $researchGrant->ProjectTitle }}" required>
            </div>

            <div class="form-group">
                <label for="GrantProvider">Grant Provider</label>
                <input type="text" name="GrantProvider" class="form-control" value="{{ $researchGrant->GrantProvider }}" required>
            </div>

            <div class="form-group">
                <label for="GrantAmount">Grant Amount</label>
                <input type="number" name="GrantAmount" class="form-control" step="0.01" value="{{ $researchGrant->GrantAmount }}" required>
            </div>

            <div class="form-group">
                <label for="StartDate">Start Date</label>
                <input type="date" name="StartDate" class="form-control" value="{{ $researchGrant->StartDate }}" required>
            </div>

            <div class="form-group">
                <label for="DurationMonth">Duration (Months)</label>
                <input type="number" name="DurationMonth" class="form-control" value="{{ $researchGrant->DurationMonth }}" required>
            </div>

            <div class="form-group">
                <label for="EndDate">End Date</label>
                <input type="date" name="EndDate" class="form-control" value="{{ $researchGrant->EndDate }}" required>
            </div>

            <div class="form-group">
                <label for="Academician_ID">Project Leader</label>
                <select name="Academician_ID" class="form-control" required>
                    <option value="">-- Select Project Leader --</option>
                    @foreach ($academicians as $academician)
                        <option value="{{ $academician->Academician_ID }}" 
                            {{ $academician->Academician_ID == $researchGrant->Academician_ID ? 'selected' : '' }}>
                            {{ $academician->Name }} ({{ $academician->StaffID }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="members">Assign Members</label>
                <select name="members[]" class="form-control" multiple>
                    @foreach ($academicians as $academician)
                        <option value="{{ $academician->Academician_ID }}" 
                            {{ $researchGrant->members->contains($academician->Academician_ID) ? 'selected' : '' }}>
                            {{ $academician->Name }} ({{ $academician->StaffID }})
                        </option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Hold down the Ctrl (Windows) or Command (Mac) key to select multiple members.</small>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
