<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700,800&family=inter:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            :root {
                --primary: #1B5E20;
                --primary-dark: #0D3D12;
                --primary-light: #2E7D32;
                --secondary: #FDD835;
                --secondary-dark: #F9A825;
                --accent: #C62828;
                --accent-light: #E53935;
            }
            
            body {
                font-family: 'Inter', sans-serif;
                background: linear-gradient(135deg, #f8fafc 0%, #e8f4fc 100%);
            }
            
            .auth-container {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem 1rem;
                position: relative;
                overflow: hidden;
            }
            
            .auth-container::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url('{{ asset('images/Background.jpg') }}') center center / cover no-repeat;
                opacity: 0.15;
                z-index: 0;
            }
            
            .auth-card {
                position: relative;
                z-index: 1;
                width: 100%;
                max-width: 1000px;
                background: white;
                border-radius: 24px;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
                overflow: hidden;
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
            
            .auth-sidebar {
                background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
                padding: 3rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                position: relative;
                overflow: hidden;
            }
            
            .auth-sidebar::before {
                content: '';
                position: absolute;
                top: -50%;
                right: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            }
            
            .auth-sidebar-content {
                position: relative;
                z-index: 1;
            }
            
            .auth-logo {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                border: 3px solid var(--secondary);
                padding: 4px;
                background: white;
                margin-bottom: 2rem;
            }
            
            .auth-sidebar h2 {
                font-family: 'Poppins', sans-serif;
                font-size: 2rem;
                font-weight: 700;
                color: white;
                margin-bottom: 1rem;
                line-height: 1.2;
            }
            
            .auth-sidebar p {
                color: rgba(255, 255, 255, 0.85);
                line-height: 1.7;
                margin-bottom: 2rem;
                font-size: 0.95rem;
            }
            
            .auth-features {
                margin-top: 2rem;
            }
            
            .auth-feature {
                display: flex;
                align-items: center;
                gap: 1rem;
                margin-bottom: 1rem;
                color: white;
            }
            
            .auth-feature i {
                width: 40px;
                height: 40px;
                border-radius: 10px;
                background: rgba(255, 255, 255, 0.15);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.1rem;
                color: var(--secondary);
            }
            
            .auth-form-container {
                padding: 3rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            
            .auth-header {
                text-align: center;
                margin-bottom: 2rem;
            }
            
            .auth-header h1 {
                font-family: 'Poppins', sans-serif;
                font-size: 1.75rem;
                font-weight: 700;
                color: var(--primary-dark);
                margin-bottom: 0.5rem;
            }
            
            .auth-header p {
                color: #64748b;
                font-size: 0.9rem;
            }
            
            @media (max-width: 768px) {
                .auth-card {
                    grid-template-columns: 1fr;
                }
                
                .auth-sidebar {
                    display: none;
                }
                
                .auth-form-container {
                    padding: 2rem 1.5rem;
                }
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="auth-container">
            <div class="auth-card">
                <!-- Left Sidebar -->
                <div class="auth-sidebar">
                    <div class="auth-sidebar-content">
                        <img src="{{ asset('images/Buguey_Logo.png') }}" alt="Buguey Logo" class="auth-logo">
                        <h2>Welcome to ResidenteApp</h2>
                        <p>Municipality of Buguey's official digital platform for seamless access to government services.</p>
                        
                        <div class="auth-features">
                            <div class="auth-feature">
                                <i class="fas fa-shield-alt"></i>
                                <span>Secure & Encrypted</span>
                            </div>
                            <div class="auth-feature">
                                <i class="fas fa-clock"></i>
                                <span>24/7 Access</span>
                            </div>
                            <div class="auth-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Fast Processing</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Form -->
                <div class="auth-form-container">
                    <div class="auth-header">
                        <h1>{{ $title ?? 'Sign In' }}</h1>
                        <p>{{ $subtitle ?? 'Enter your credentials to access your account' }}</p>
                    </div>
                    
                    {{ $slot }}
                    
                    <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #e2e8f0;">
                        <a href="/" style="color: var(--primary); text-decoration: none; font-weight: 500; font-size: 0.9rem;">
                            <i class="fas fa-arrow-left"></i> Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
