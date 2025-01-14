@extends('layouts.app')

@section('content')
    <div class="container"> 
        <h1>Add Research Grant</h1>

        <form action="{{ route('research-grants.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="ProjectTitle" class="form-label">Project Title</label>
                <input type="text" id="ProjectTitle" name="ProjectTitle" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="GrantProvider" class="form-label">Grant Provider</label>
                <input type="text" id="GrantProvider" name="GrantProvider" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="GrantAmount" class="form-label">Grant Amount</label>
                <input type="number" id="GrantAmount" name="GrantAmount" class="form-control" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="StartDate" class="form-label">Start Date</label>
                <input type="date" id="StartDate" name="StartDate" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="DurationMonth" class="form-label">Duration (Months)</label>
                <input type="number" id="DurationMonth" name="DurationMonth" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="EndDate" class="form-label">End Date</label>
                <input type="date" id="EndDate" name="EndDate" class="form-control" readonly>
            </div>

            <!-- Project Leader (Academician) -->
            <div class="mb-3">
                <label for="Academician_ID" class="form-label">Project Leader</label>
                <select id="Academician_ID" name="Academician_ID" class="form-control" required>
                    <option value="">-- Select an Academician --</option>
                    @foreach ($academicians as $academician)
                        <option value="{{ $academician->Academician_ID }}">
                            {{ $academician->Name }} ({{ $academician->StaffID }})
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Create Research Grant</button>
        </form>
    </div>

    <script>
        document.getElementById('StartDate').addEventListener('change', calculateEndDate);
        document.getElementById('DurationMonth').addEventListener('input', calculateEndDate);

        function calculateEndDate() {
            var startDate = document.getElementById('StartDate').value;
            var durationMonth = document.getElementById('DurationMonth').value;

            if (startDate && durationMonth) {
                var start = new Date(startDate);
                start.setMonth(start.getMonth() + parseInt(durationMonth)); // Add duration in months to start date

                var endDate = start.toISOString().split('T')[0]; // Format to yyyy-mm-dd
                document.getElementById('EndDate').value = endDate;
            }
        }
    </script>
@endsection
