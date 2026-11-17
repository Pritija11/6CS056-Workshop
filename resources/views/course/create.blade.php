
<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>

    <h1>Create Course</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <label>Course Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description') }}</textarea>
        <br><br>

        <label>Duration (Weeks):</label><br>
        <input type="number" name="duration" value="{{ old('duration') }}">
        <br><br>

        <label>Fee:</label><br>
        <input type="number" name="fee" step="0.01" value="{{ old('fee') }}">
        <br><br>

        <label>Difficulty:</label><br>
        <select name="difficulty">
            <option value="">Select Difficulty</option>
            <option value="Easy" {{ old('difficulty') == 'Easy' ? 'selected' : '' }}>Easy</option>
            <option value="Medium" {{ old('difficulty') == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="Hard" {{ old('difficulty') == 'Hard' ? 'selected' : '' }}>Hard</option>
        </select>
        <br><br>

        <label>
            <input type="checkbox" name="is_active" value="1"
                {{ old('is_active', '1') == '1' ? 'checked' : '' }}>
            Active Course
        </label>

        <br><br>

        <button type="submit">Save Course</button>
    </form>

    <br>

    <a href="{{ route('courses.index') }}">Back to Courses</a>

</body>
</html>
