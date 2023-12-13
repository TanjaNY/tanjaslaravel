<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h1>Students</h1>

    <a href="/students/create">Add New Student</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Course</th>
            <th>Registered At</th>
            <th>Actions</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->phone }}</td>

            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->course }}</td>
    <td>
            @if($student->registered_at)
                  {{ $student->registered_at->format('Y-m-d') }}
            @else
                  Not Registered
            @endif
    </td>
    <td>
        @if($student->registered_at)
           {{ $student->registered_at->format('Y-m-d') }}   Not Registered
        @endif
    </td>
    <td>
        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach

    </table>
</body>
</html>
