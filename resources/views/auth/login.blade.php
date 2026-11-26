
<x-layouts.app>
    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-heading">
                <h1>Welcome Back</h1>
                <p>Login to your Training Institute account.</p>
            </div>

            <form action="{{ url('/login') }}" method="POST" class="auth-form">
                @csrf

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
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <button type="submit" class="auth-button">Login</button>
            </form>

            <p class="auth-footer">
                Don't have an account?
                <a href="{{ url('/register') }}">Register</a>
            </p>
        </div>
    </div>
</x-layouts.app>
