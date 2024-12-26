@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Details</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Name:</strong> {{ $student->Name }}</li>
        <li class="list-group-item"><strong>Age:</strong> {{ $student->Age }}</li>
        <li class="list-group-item"><strong>Address:</strong> {{ $student->Address }}</li>
        <li class="list-group-item"><strong>Score:</strong> {{ $student->Score }}</li>
    </ul>
    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
