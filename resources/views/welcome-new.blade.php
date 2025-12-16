<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Residente App - LGU Buguey</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700&family=inter:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #0066CC;
            --primary-dark: #0052A3;
            --secondary: #FF7A00;
            --light: #F5F7FA;
            --dark: #1A1F2E;
            --border: #E5E7EB;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
            color: #333;
        }
        
        body.dark {
            background: linear-gradient(135deg, #1a1f2e 0%, #262d3d 100%);
            color: #f0f0f0;
        }
        
        /* Navigation */
        nav {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            padding: 1rem 0;
        }
        
        body.dark nav {
            background: #1a1f2e;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        
        nav .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--primary);
        }
        
        .logo i {
            font-size: 1.5rem;
            color: white;
            background: var(--primary);
            padding: 0.5rem;
            border-radius: 8px;
        }
        
        .nav-buttons {
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }
        
        .btn {
            padding: 0.6rem 1.5rem;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 102, 204, 0.3);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .btn-secondary:hover {
            background: var(--primary);
            color: white;
        }
        
        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .hero {
            min-height: calc(100vh - 70px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        
        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            width: 100%;
        }
        
        .hero-text h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .hero-text p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        body.dark .hero-text p {
            color: #aaa;
        }
        
        .hero-text .cta-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .hero-image {
            position: relative;
            height: 500px;
        }
        
        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .floating-card {
            position: absolute;
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            animation: float 3s ease-in-out infinite;
        }
        
        body.dark .floating-card {
            background: #2a3040;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .floating-card.card1 {
            top: 20%;
            right: 10%;
            animation-delay: 0s;
        }
        
        .floating-card.card2 {
            bottom: 20%;
            left: 10%;
            animation-delay: 1s;
        }
        
        /* Features Section */
        .features {
            padding: 4rem 0;
            background: white;
            margin-top: 3rem;
        }
        
        body.dark .features {
            background: #1a1f2e;
        }
        
        .features h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            font-family: 'Poppins', sans-serif;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .feature-card {
            background: var(--light);
            padding: 2rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        body.dark .feature-card {
            background: #262d3d;
        }
        
        .feature-card:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 102, 204, 0.15);
        }
        
        .feature-card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .feature-card h3 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 0.75rem;
            font-size: 1.25rem;
        }
        
        .feature-card p {
            color: #666;
            line-height: 1.6;
        }
        
        body.dark .feature-card p {
            color: #aaa;
        }
        
        /* Services Section */
        .services {
            padding: 4rem 0;
        }
        
        .services h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            font-family: 'Poppins', sans-serif;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary);
        }
        
        body.dark .service-card {
            background: #262d3d;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            border-left-color: var(--secondary);
        }
        
        .service-card h3 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 0.75rem;
            color: var(--primary);
        }
        
        .service-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        
        body.dark .service-card p {
            color: #aaa;
        }
        
        .service-card .service-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--secondary);
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 2rem 0;
            margin-top: 4rem;
            text-align: center;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-content {
                grid-template-columns: 1fr;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .hero-image {
                display: none;
            }
            
            .nav-buttons {
                flex-direction: column;
                width: 100%;
            }
            
            .btn {
                width: 100%;
            }
            
            .features h2,
            .services h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="logo">
                <i class="fas fa-city"></i>
                <span>Residente App</span>
            </div>
            <div class="nav-buttons">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-secondary">
                            <i class="fas fa-sign-in-alt"></i> Log In
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">
                                <i class="fas fa-user-plus"></i> Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Welcome to Residente App</h1>
                    <p>LGU Buguey's integrated platform for citizen services, permits, and municipal services. Streamlining government processes to serve you better.</p>
                    <div class="cta-group">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                                    <i class="fas fa-arrow-right"></i> Go to Dashboard
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="btn btn-primary">
                                    <i class="fas fa-user-plus"></i> Get Started
                                </a>
                                <a href="{{ route('login') }}" class="btn btn-secondary">
                                    <i class="fas fa-sign-in-alt"></i> Sign In
                                </a>
                            @endauth
                        @endif
                    </div>
                </div>
                <div class="hero-image">
                    <i class="fas fa-building" style="font-size: 200px; color: var(--primary); opacity: 0.1; position: absolute; right: -50px; top: -50px;"></i>
                    <div class="floating-card card1">
                        <i class="fas fa-check-circle" style="color: #10B981; font-size: 1.5rem;"></i>
                        <p><strong>30K+</strong> Citizens Served</p>
                    </div>
                    <div class="floating-card card2">
                        <i class="fas fa-lightning-bolt" style="color: var(--secondary); font-size: 1.5rem;"></i>
                        <p><strong>99.9%</strong> Uptime</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2>Why Choose Residente App?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile Accessible</h3>
                    <p>Access services anytime, anywhere through your mobile device or desktop browser.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-lock"></i>
                    <h3>Secure & Private</h3>
                    <p>Your personal information is encrypted and protected with industry-standard security.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-bolt"></i>
                    <h3>Fast Processing</h3>
                    <p>Streamlined digital processes reduce waiting times and processing delays.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-headset"></i>
                    <h3>24/7 Support</h3>
                    <p>Get help whenever you need it with our dedicated support team.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Real-Time Updates</h3>
                    <p>Track your requests and applications with real-time status updates.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-users"></i>
                    <h3>Community-Driven</h3>
                    <p>Connect with fellow residents and stay informed about community news.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2>Available Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Permits & Licenses</h3>
                    <p>Apply for business permits, working permits, and other municipal licenses online.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-heartbeat"></i></div>
                    <h3>Health Services</h3>
                    <p>Book health appointments, view medical records, and access municipal health services.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-certificate"></i></div>
                    <h3>Certificates & Documents</h3>
                    <p>Request barangay certificates, clearances, and official documents.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-calendar-alt"></i></div>
                    <h3>Event Management</h3>
                    <p>Register for community events and receive important announcements.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-info-circle"></i></div>
                    <h3>Information Hub</h3>
                    <p>Access important municipal information, ordinances, and community updates.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-comments"></i></div>
                    <h3>Feedback & Support</h3>
                    <p>Submit feedback, file complaints, and communicate with your local government.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Residente App - LGU Buguey. All rights reserved.</p>
            <p style="margin-top: 0.5rem; font-size: 0.9rem; opacity: 0.8;">
                <i class="fas fa-map-marker-alt"></i> Buguey, Cagayan Province, Philippines
            </p>
        </div>
    </footer>

    <script>
        // Dark mode toggle (optional - you can add a toggle button)
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (prefersDark) {
            document.body.classList.add('dark');
        }
    </script>
</body>
</html>
