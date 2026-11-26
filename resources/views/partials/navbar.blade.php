<nav class="navbar">
    <a href="{{ url('/') }}" class="brand">Training Institute</a>

    <div>
        @guest
            <a href="{{ url('/register') }}">Register</a>
            <a href="{{ route('login') }}">Login</a>
        @endguest

        @auth
            <a href="{{ route('students.index') }}">Students</a>
            <a href="{{ route('courses.index') }}">Courses</a>

            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
    </div>
</nav>