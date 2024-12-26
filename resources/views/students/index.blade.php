@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Student List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>
    
    <!-- Search Input -->
    <input type="text" id="search" class="form-control mb-3" placeholder="Search for students...">
    
    <!-- Student Table -->
    <table class="table">
        <thead>
            <tr>    
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Score</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="studentTableBody">
            @foreach($students as $student)
                <tr class="student-row">
                    <td class="student-name">{{ $student->Name }}</td>
                    <td class="student-age">{{ $student->Age }}</td>
                    <td class="student-address">{{ $student->Address }}</td>
                    <td class="student-score">{{ $student->Score }}</td>
                    <td>
                        <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.getElementById('search').addEventListener('input', function() {
        const query = this.value.toLowerCase();
        const rows = document.querySelectorAll('.student-row');
        
        rows.forEach(row => {
            const name = row.querySelector('.student-name').textContent.toLowerCase();
            const address = row.querySelector('.student-address').textContent.toLowerCase();

            // Show or hide row based on search query
            row.style.display = (name.includes(query) || address.includes(query)) ? '' : 'none';
        });
    });
</script>
@endsection
