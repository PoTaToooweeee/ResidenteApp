<x-guest-layout>
    <x-slot name="title">Log In</x-slot>
    <x-slot name="subtitle">Enter your credentials to access your account</x-slot>

    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            font-size: 0.875rem;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }
        
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: #f8fafc;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            background: white;
            box-shadow: 0 0 0 3px rgba(27, 94, 32, 0.1);
        }
        
        .form-checkbox {
            margin: 1.5rem 0;
        }
        
        .form-checkbox input {
            width: 18px;
            height: 18px;
            border: 2px solid #cbd5e1;
            border-radius: 4px;
            cursor: pointer;
            vertical-align: middle;
        }
        
        .form-checkbox label {
            font-size: 0.875rem;
            color: #64748b;
            cursor: pointer;
            margin-left: 0.5rem;
            vertical-align: middle;
        }
        
        .btn-primary {
            width: 100%;
            padding: 0.875rem 1.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(27, 94, 32, 0.3);
        }
        
        .forgot-link {
            text-align: center;
            margin-top: 1rem;
        }
        
        .forgot-link a {
            color: var(--primary);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .forgot-link a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
            font-size: 0.9rem;
            color: #64748b;
        }
        
        .register-link a {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
        }
        
        .register-link a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .alert-success {
            padding: 0.875rem 1rem;
            background: #d1fae5;
            border: 1px solid #6ee7b7;
            border-radius: 10px;
            color: #047857;
            font-size: 0.875rem;
            margin-bottom: 1.5rem;
        }
    </style>

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">
                <i class="fas fa-envelope" style="margin-right: 0.5rem; color: var(--primary);"></i>
                Email Address
            </label>
            <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Enter your email">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">
                <i class="fas fa-lock" style="margin-right: 0.5rem; color: var(--primary);"></i>
                Password
            </label>
            <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
      

        <!-- Forgot Password -->
        @if (Route::has('password.request'))
            <div class="forgot-link">
                <a href="{{ route('password.request') }}">Forgot password?</a>

            </div>
        @endif

        <button type="submit" class="btn-primary">
            <i class="fas fa-sign-in-alt" style="margin-right: 0.5rem;"></i>
            Sign In
        </button>

        @if (Route::has('register'))
            <div class="register-link">
                Don't have an account? <a href="{{ route('register') }}">Create Account</a>
            </div>
        @endif
    </form>
</x-guest-layout>
