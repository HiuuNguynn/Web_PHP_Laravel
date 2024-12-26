@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="Name" name="Name" required>
        </div>
        <div class="mb-3">
            <label for="Age" class="form-label">Age</label>
            <input type="number" class="form-control" id="Age" name="Age" required>
        </div>
        <div class="mb-3">
            <label for="Address" class="form-label">Address</label>
            <input type="text" class="form-control" id="Address" name="Address" required>
        </div>
        <div class="mb-3">
            <label for="Score" class="form-label">Score</label>
            <input type="number" class="form-control" id="Score" name="Score" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
