
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name"
               value="{{ old('name', $student->name) }}">
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email"
               value="{{ old('email', $student->email) }}">
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone"
               value="{{ old('phone', $student->phone) }}">
        <br><br>

        <label>Address:</label><br>
        <textarea name="address">{{ old('address', $student->address) }}</textarea>
        <br><br>

        <label>Date of Birth:</label><br>
        <input type="date" name="date_of_birth"
               value="{{ old('date_of_birth', $student->date_of_birth) }}">
        <br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>

    <a href="{{ route('students.index') }}">Back to Students</a>

</body>
</html>
