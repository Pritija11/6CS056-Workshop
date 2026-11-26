
<x-layouts.app>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-heading">
                <h1>Create an Account</h1>
                <p>Register to access the Training Institute.</p>
            </div>

            <form action="{{ url('/register') }}" method="POST" class="auth-form">
                @csrf

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        required
                    >
                    @error('name')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                    >
                    @error('email')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Create a password"
                        required
                    >
                    @error('password')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                        required
                    >
                </div>

                <button type="submit" class="auth-button">Create Account</button>
            </form>

            <p class="auth-footer">
                Already have an account?
                <a href="{{ route('login') }}">Login</a>
            </p>
        </div>
    </div>
</x-layouts.app>
