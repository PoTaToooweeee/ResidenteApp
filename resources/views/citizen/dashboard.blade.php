<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ResidenteApp') }} - Citizen Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #20B62A;
            --primary-dark: #118D1A;
            --primary-light: #86EFAC;
        }
        
        .sidebar {
            background: linear-gradient(180deg, #1A1F2E 0%, #2D3748 100%);
            min-height: 100vh;
        }
        
        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #a0aec0;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
            margin-bottom: 0.25rem;
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            background: rgba(32, 182, 42, 0.1);
            color: var(--primary);
        }
        
        .sidebar-link.active {
            border-left: 3px solid var(--primary);
        }
        
        .sidebar-link i {
            width: 24px;
            margin-right: 0.75rem;
        }
        
        .stat-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .quick-action {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 1.25rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .quick-action:hover {
            border-color: var(--primary);
            background: rgba(32, 182, 42, 0.02);
        }
        
        .quick-action i {
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="sidebar w-64 fixed left-0 top-0 h-full p-4">
            <div class="flex items-center mb-8">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center mr-3">
                    <i class="fas fa-leaf text-white"></i>
                </div>
                <span class="text-white font-bold text-lg">ResidenteApp</span>
            </div>
            
            <nav>
                <a href="{{ route('citizen.dashboard') }}" class="sidebar-link active">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-file-alt"></i>
                    My Requests
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-certificate"></i>
                    Certificates
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-calendar-alt"></i>
                    Appointments
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-bullhorn"></i>
                    Announcements
                </a>
                <a href="#" class="sidebar-link">
                    <i class="fas fa-comment-alt"></i>
                    Feedback
                </a>
                <a href="{{ route('profile.edit') }}" class="sidebar-link">
                    <i class="fas fa-user-cog"></i>
                    My Profile
                </a>
            </nav>
            
            <div class="absolute bottom-4 left-4 right-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="sidebar-link w-full text-left text-red-400 hover:text-red-300 hover:bg-red-500/10">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </div>
        </aside>
        
        <!-- Main Content -->
        <main class="ml-64 flex-1 p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Welcome, {{ Auth::user()->fname ?? Auth::user()->name }}!</h1>
                    <p class="text-gray-600">Here's what's happening with your account today.</p>
                </div>
                <div class="flex items-center gap-4">
                    <button class="p-2 rounded-lg bg-white border border-gray-200 hover:bg-gray-50">
                        <i class="fas fa-bell text-gray-600"></i>
                    </button>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center text-white font-semibold">
                            {{ strtoupper(substr(Auth::user()->fname ?? Auth::user()->name, 0, 1)) }}
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">Citizen</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Pending Requests</p>
                            <p class="text-2xl font-bold text-gray-900">0</p>
                        </div>
                        <div class="stat-icon bg-yellow-100">
                            <i class="fas fa-clock text-yellow-600"></i>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Approved</p>
                            <p class="text-2xl font-bold text-gray-900">0</p>
                        </div>
                        <div class="stat-icon bg-green-100">
                            <i class="fas fa-check-circle text-green-600"></i>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Certificates</p>
                            <p class="text-2xl font-bold text-gray-900">0</p>
                        </div>
                        <div class="stat-icon bg-blue-100">
                            <i class="fas fa-certificate text-blue-600"></i>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Appointments</p>
                            <p class="text-2xl font-bold text-gray-900">0</p>
                        </div>
                        <div class="stat-icon bg-purple-100">
                            <i class="fas fa-calendar-check text-purple-600"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="quick-action">
                        <i class="fas fa-file-contract"></i>
                        <p class="text-sm font-medium text-gray-700">Barangay Clearance</p>
                    </div>
                    <div class="quick-action">
                        <i class="fas fa-home"></i>
                        <p class="text-sm font-medium text-gray-700">Residency Certificate</p>
                    </div>
                    <div class="quick-action">
                        <i class="fas fa-store"></i>
                        <p class="text-sm font-medium text-gray-700">Business Permit</p>
                    </div>
                    <div class="quick-action">
                        <i class="fas fa-gavel"></i>
                        <p class="text-sm font-medium text-gray-700">Blotter Report</p>
                    </div>
                    <div class="quick-action">
                        <i class="fas fa-calendar-plus"></i>
                        <p class="text-sm font-medium text-gray-700">Schedule Appointment</p>
                    </div>
                    <div class="quick-action">
                        <i class="fas fa-comment-dots"></i>
                        <p class="text-sm font-medium text-gray-700">Submit Feedback</p>
                    </div>
                </div>
            </div>
            
            <!-- Recent Activity & Announcements -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Recent Activity -->
                <div class="bg-white rounded-xl p-6 border border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h2>
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-inbox text-4xl mb-3 text-gray-300"></i>
                        <p>No recent activity</p>
                        <p class="text-sm">Your recent requests and updates will appear here.</p>
                    </div>
                </div>
                
                <!-- Announcements -->
                <div class="bg-white rounded-xl p-6 border border-gray-200">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Latest Announcements</h2>
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-bullhorn text-4xl mb-3 text-gray-300"></i>
                        <p>No announcements</p>
                        <p class="text-sm">Stay tuned for updates from your barangay.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
