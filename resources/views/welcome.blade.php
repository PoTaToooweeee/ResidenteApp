<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ResidenteApp - Municipality of Buguey, Cagayan</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700,800&family=inter:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #1B5E20;
            --primary-dark: #0D3D12;
            --primary-light: #2E7D32;
            --secondary: #FDD835;
            --secondary-dark: #F9A825;
            --accent: #C62828;
            --accent-light: #E53935;
            --light: #f8fafc;
            --dark: #1e293b;
            --gray: #64748b;
            --border: #e2e8f0;
            --gradient-start: #1B5E20;
            --gradient-end: #0D3D12;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--light);
            color: #333;
            overflow-x: hidden;
        }
        
        /* Top Government Banner */
        .gov-banner {
            background: linear-gradient(90deg, var(--primary-dark) 0%, var(--primary) 50%, var(--primary-dark) 100%);
            color: white;
            padding: 0.5rem 0;
            font-size: 0.8rem;
            text-align: center;
        }
        
        .gov-banner .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .gov-banner span {
            opacity: 0.9;
        }
        
        .gov-banner i {
            color: var(--secondary);
        }
        
        /* Navigation */
        nav {
            background: white;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        nav .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
        }
        
        .logo-seal {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            object-fit: contain;
            border: 2px solid var(--secondary);
            padding: 2px;
            background: white;
        }
        
        .logo-text {
            display: flex;
            flex-direction: column;
        }
        
        .logo-text .municipality {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--primary-dark);
            line-height: 1.2;
        }
        
        .logo-text .tagline {
            font-size: 0.75rem;
            color: var(--gray);
            font-weight: 500;
        }
        
        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        
        .nav-link {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: color 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--primary);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-buttons {
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }
        
        .datetime-display {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .datetime-display .time {
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .datetime-display .separator {
            font-size: 1.25rem;
            color: var(--gray);
            font-weight: 300;
        }
        
        .datetime-display .date {
            font-size: 1rem;
            font-weight: 500;
            color: var(--gray);
        }
        
        .btn {
            padding: 0.7rem 1.75rem;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-align: center;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(21, 101, 192, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(21, 101, 192, 0.4);
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid white;
        }
        
        .btn-secondary:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        .btn-gold {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark) 100%);
            color: var(--dark);
            font-weight: 700;
        }
        
        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 179, 0, 0.4);
        }
        
        /* Main Content */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        /* Hero Section */
        .hero {
            min-height: calc(100vh - 120px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 1rem;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('images/Background.jpg') }}') center 35% / cover no-repeat;
        
            z-index: -2;
        }
        
        @keyframes backgroundZoom {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }
        
        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 60%;
            height: 100%;
            background: linear-gradient(90deg, rgba(15, 23, 42, 0.92) 0%, rgba(15, 23, 42, 0.85) 50%, rgba(15, 23, 42, 0.4) 80%, transparent 100%);
            pointer-events: none;
            z-index: 0;
        }
        
        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            width: 100%;
            position: relative;
            z-index: 1;
        }
        
        .hero-text {
            max-width: 600px;
        }
        
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            backdrop-filter: blur(10px);
        }
        
        .hero-badge i {
            color: var(--secondary);
        }
        
        .hero-text h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3.25rem;
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 0.75rem;
            color: white;
        }
        
        .hero-text h1 .highlight {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .hero-text h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--secondary);
            margin-bottom: 1.25rem;
        }
        
        .hero-text p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 2rem;
            line-height: 1.8;
        }
        
        .hero-text .cta-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 2.5rem;
        }
        
        .hero-stats {
            display: flex;
            gap: 2.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .stat-item {
            text-align: left;
        }
        
        .stat-number {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--secondary);
            line-height: 1;
        }
        
        .stat-label {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 0.25rem;
        }
        
        /* Hero Visual */
        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .seal-container {
            position: relative;
            width: 400px;
            height: 400px;
        }
        
        .seal-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, rgba(21, 101, 192, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 3s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.6; }
            50% { transform: translate(-50%, -50%) scale(1.1); opacity: 0.3; }
        }
        
        .main-seal {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 280px;
            height: 280px;
            object-fit: contain;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.15));
            z-index: 2;
        }
        
        .floating-card {
            position: absolute;
            background: white;
            padding: 1rem 1.25rem;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            z-index: 3;
            animation: float 4s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        .floating-card.card1 {
            top: 10%;
            right: 0;
            animation-delay: 0s;
        }
        
        .floating-card.card2 {
            bottom: 15%;
            left: 0;
            animation-delay: 1.5s;
        }
        
        .floating-card.card3 {
            bottom: 5%;
            right: 10%;
            animation-delay: 0.75s;
        }
        
        .floating-card .card-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }
        
        .floating-card .card-icon.green {
            background: rgba(76, 175, 80, 0.1);
            color: var(--accent);
        }
        
        .floating-card .card-icon.blue {
            background: rgba(21, 101, 192, 0.1);
            color: var(--primary);
        }
        
        .floating-card .card-icon.gold {
            background: rgba(255, 179, 0, 0.1);
            color: var(--secondary-dark);
        }
        
        .floating-card .card-text strong {
            display: block;
            font-size: 1.1rem;
            color: var(--dark);
        }
        
        .floating-card .card-text span {
            font-size: 0.8rem;
            color: var(--gray);
        }
        
        /* Features Section */
        .features {
            padding: 5rem 0;
            background: white;
        }
        
        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 4rem;
        }
        
        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(21, 101, 192, 0.08);
            color: var(--primary);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .section-header h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.75rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1rem;
        }
        
        .section-header p {
            font-size: 1.1rem;
            color: var(--gray);
            line-height: 1.7;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }
        
        .feature-card {
            background: var(--light);
            padding: 2.5rem;
            border-radius: 20px;
            transition: all 0.4s ease;
            border: 1px solid transparent;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .feature-card:hover {
            background: white;
            border-color: var(--border);
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(21, 101, 192, 0.12);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, rgba(21, 101, 192, 0.1) 0%, rgba(21, 101, 192, 0.05) 100%);
            color: var(--primary);
        }
        
        .feature-card h3 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 0.75rem;
            font-size: 1.25rem;
            color: var(--dark);
        }
        
        .feature-card p {
            color: var(--gray);
            line-height: 1.7;
            font-size: 0.95rem;
        }

        /* Services Section */
        .services {
            padding: 5rem 0;
            background: linear-gradient(180deg, #f8fafc 0%, #e8f4fc 100%);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }
        
        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            transition: all 0.4s ease;
            border: 1px solid var(--border);
            text-align: center;
            position: relative;
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
            border-color: transparent;
        }
        
        .service-icon-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            box-shadow: 0 10px 30px rgba(21, 101, 192, 0.25);
        }
        
        .service-card h3 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 0.75rem;
            font-size: 1.2rem;
            color: var(--dark);
        }
        
        .service-card p {
            color: var(--gray);
            line-height: 1.6;
            font-size: 0.9rem;
        }
        
        /* Quick Links Section */
        .quick-links {
            padding: 5rem 0;
            background: white;
        }
        
        .links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }
        
        .link-card {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: var(--light);
            padding: 1.5rem;
            border-radius: 16px;
            text-decoration: none;
            color: var(--dark);
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }
        
        .link-card:hover {
            background: white;
            border-color: var(--primary);
            box-shadow: 0 10px 30px rgba(21, 101, 192, 0.1);
            transform: translateX(5px);
        }
        
        .link-card i {
            font-size: 1.5rem;
            color: var(--primary);
        }
        
        .link-card span {
            font-weight: 600;
            font-size: 0.95rem;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -25%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            border-radius: 50%;
        }
        
        .cta-content {
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .cta-content h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
        }
        
        .cta-content p {
            font-size: 1.15rem;
            color: rgba(255,255,255,0.85);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-content .btn-gold {
            padding: 1rem 2.5rem;
            font-size: 1rem;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }
        
        .footer-brand {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .footer-brand img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 2px solid var(--secondary);
            background: white;
            padding: 3px;
        }
        
        .footer-brand-text h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        
        .footer-brand-text p {
            font-size: 0.9rem;
            opacity: 0.8;
            line-height: 1.6;
        }
        
        .footer-section h4 {
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            margin-bottom: 1.25rem;
            color: var(--secondary);
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section ul li {
            margin-bottom: 0.75rem;
        }
        
        .footer-section ul li a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .footer-section ul li a:hover {
            color: white;
        }
        
        .footer-contact p {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.7);
        }
        
        .footer-contact i {
            color: var(--secondary);
            width: 20px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .footer-bottom p {
            font-size: 0.9rem;
            opacity: 0.7;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--secondary);
            color: var(--dark);
            transform: translateY(-3px);
        }
        
        /* Mobile Menu Toggle */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark);
            cursor: pointer;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .hero-text {
                max-width: 100%;
            }
            
            .hero-text .cta-group {
                justify-content: center;
            }
            
            .hero-stats {
                justify-content: center;
            }
            
            .features-grid,
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
            
            .seal-container {
                width: 350px;
                height: 350px;
            }
            
            .main-seal {
                width: 220px;
                height: 220px;
            }
        }
        
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero-text h1 {
                font-size: 2.25rem;
            }
            
            .hero-text h2 {
                font-size: 1.25rem;
            }
            
            .hero-visual {
                display: none;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
            
            .features-grid,
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .links-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .footer-brand {
                flex-direction: column;
                align-items: center;
            }
            
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .cta-content h2 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <!-- Government Banner -->
    <div class="gov-banner">
        <div class="container">
            <span><i class="fas fa-flag"></i> Republic of the Philippines</span>
            <span>|</span>
            <span><i class="fas fa-landmark"></i> Province of Cagayan</span>
            <span>|</span>
            <span><i class="fas fa-building"></i> Municipality of Buguey</span>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav>
        <div class="container">
            <a href="/" class="logo">
                <img src="{{ asset('images/Buguey_Logo.png') }}" alt="Official Logo of Buguey, Cagayan" class="logo-seal">
                <div class="logo-text">
                    <span class="municipality">Municipality of Buguey</span>
                    <span class="tagline">ResidenteApp Portal</span>
                </div>
            </a>
            
            <div class="nav-menu">
                <a href="#features" class="nav-link">Features</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
            
            <div class="nav-buttons">
                <div class="datetime-display">
                    <div class="time" id="current-time">--:--:-- --</div>
                    <div class="separator">|</div>
                    <div class="date" id="current-date">--- --, ----</div>
                </div>
            </div>
            
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <i class="fas fa-star"></i>
                        <span>Official Digital Platform</span>
                    </div>
                    <h1>Welcome to <span class="highlight">ResidenteApp</span></h1>
                    <h2>Your Gateway to Buguey Municipal Services</h2>
                    <p>Experience seamless access to government services through our centralized digital platform. From document requests to real-time tracking—empowering every resident of Buguey, Cagayan.</p>
                    <div class="cta-group">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">
                                    <i class="fas fa-arrow-right"></i> Go to Dashboard
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="btn btn-gold btn-lg">
                                    <i class="fas fa-user-plus"></i> Create Account
                                </a>
                                <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">
                                    <i class="fas fa-sign-in-alt"></i> Log In
                                </a>
                            @endauth
                        @endif
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number">30,148</div>
                            <div class="stat-label">Residents</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">30</div>
                            <div class="stat-label">Barangays</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">00</div>
                            <div class="stat-label">Services</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-sparkles"></i>
                    <span>Platform Features</span>
                </div>
                <h2>What is Residente App?</h2>
                <p>Our platform is designed with security, efficiency, and accessibility in mind—bringing government services closer to every Buguey resident.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Role-Based Access</h3>
                    <p>Each user sees only what is relevant to their role—citizens, barangay staff, or municipal offices.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3>Secure & Verified</h3>
                    <p>Email verification, security logs, and encrypted data powered by enterprise-grade security.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Centralized Data</h3>
                    <p>All citizen profiles, permits, and certificates in one secure and organized database system.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Responsive</h3>
                    <p>Access services from any device—desktop, tablet, or mobile phone with full functionality.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Real-Time Tracking</h3>
                    <p>Monitor requests and applications with real-time status updates and notifications.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Support System</h3>
                    <p>Built-in inquiry and feedback system for quick assistance from municipal offices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-cogs"></i>
                    <span>Core Modules</span>
                </div>
                <h2>Available Services</h2>
                <p>Comprehensive digital services covering all aspects of municipal and barangay operations.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <h3>Citizen Profiles</h3>
                    <p>Complete master records with family, occupation, property, and livelihood information.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3>Permits & Licenses</h3>
                    <p>Business permits, working permits, and tricycle permits managed seamlessly.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Health Services</h3>
                    <p>MHO appointments, senior benefits, PWD programs, and vaccination records.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>Barangay Management</h3>
                    <p>Barangay profiles, officials registry, blotter systems, and community services.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Documents</h3>
                    <p>Generate official documents, barangay clearances, and archived certificates.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <h3>Tourism & Events</h3>
                    <p>Municipal tourism destinations, events, and visitor tracking through ATOP.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="quick-links">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-link"></i>
                    <span>Quick Access</span>
                </div>
                <h2>Helpful Resources</h2>
            </div>
            <div class="links-grid">
                <a href="#" class="link-card">
                    <i class="fas fa-bullhorn"></i>
                    <span>Announcements</span>
                </a>
                <a href="#" class="link-card">
                    <i class="fas fa-gavel"></i>
                    <span>Ordinances</span>
                </a>
                <a href="#" class="link-card">
                    <i class="fas fa-sitemap"></i>
                    <span>Org Structure</span>
                </a>
                <a href="#" class="link-card">
                    <i class="fas fa-question-circle"></i>
                    <span>Help & Support</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Get Started?</h2>
                <p>Join thousands of Buguey residents already using ResidenteApp for faster, more convenient access to municipal services.</p>
                @if (Route::has('login'))
                    @guest
                        <a href="{{ route('register') }}" class="btn btn-gold">
                            <i class="fas fa-user-plus"></i> Create Your Account Now
                        </a>
                    @endguest
                @endif
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <img src="{{ asset('images/Buguey_Logo.jpg') }}" alt="Official Logo of Buguey, Cagayan">
                    <div class="footer-brand-text">
                        <h3>Municipality of Buguey</h3>
                        <p>Serving the people of Buguey, Cagayan through accessible and efficient digital governance.</p>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Citizen Portal</a></li>
                        <li><a href="#">Document Requests</a></li>
                        <li><a href="#">Permits & Licenses</a></li>
                        <li><a href="#">Health Services</a></li>
                    </ul>
                </div>
                
                <div class="footer-section footer-contact">
                    <h4>Contact Us</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Buguey, Cagayan, Philippines</p>
                    <p><i class="fas fa-phone"></i> (078) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@buguey.gov.ph</p>
                    <p><i class="fas fa-clock"></i> Mon-Fri: 8:00 AM - 5:00 PM</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 ResidenteApp - Municipality of Buguey, Cagayan. All rights reserved.</p>
                <div class="social-links">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Update Philippine Time and Date
        function updateDateTime() {
            const now = new Date();
            
            // Convert to Philippine Time (UTC+8)
            const phTime = new Date(now.toLocaleString('en-US', { timeZone: 'Asia/Manila' }));
            
            // Format time (12-hour format with AM/PM)
            let hours = phTime.getHours();
            const minutes = phTime.getMinutes().toString().padStart(2, '0');
            const seconds = phTime.getSeconds().toString().padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
            
            // Format date
            const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };
            const dateString = phTime.toLocaleDateString('en-US', options);
            
            // Update DOM
            document.getElementById('current-time').textContent = timeString;
            document.getElementById('current-date').textContent = dateString + ' (PHT)';
        }
        
        // Update immediately and then every second
        updateDateTime();
        setInterval(updateDateTime, 1000);
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Navbar shadow on scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.style.boxShadow = '0 4px 30px rgba(0,0,0,0.12)';
            } else {
                nav.style.boxShadow = '0 4px 20px rgba(0,0,0,0.08)';
            }
        });
    </script>
</body>
</html>
