<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Resident Dashboard') }}
                </h2>
                <p class="text-sm text-gray-500 mt-1">Municipality of Buguey, Cagayan • Official Citizen Portal</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }} {{ Auth::user()->mname }} {{ Auth::user()->lname }}</p>
                    <p class="text-xs text-gray-500">{{ Auth::user()->nameofbarangay ?? 'No Barangay Assigned' }}</p>
                </div>
                <div class="h-12 w-12 rounded-full flex items-center justify-center text-white font-bold text-lg" style="background: {{ theme_gradient('primary') }}">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Welcome Banner -->
            <div class="rounded-xl overflow-hidden relative" style="background: {{ theme_gradient('primary') }}; box-shadow: {{ theme_shadow('primary') }}">
                <!-- Decorative Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <defs>
                            <pattern id="wave" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                                <path d="M0 20 Q10 10, 20 20 T40 20" fill="none" stroke="white" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#wave)"/>
                    </svg>
                </div>
                <div class="px-6 py-8 md:flex md:items-center md:justify-between relative z-10">
                    <div class="text-white">
                        <div class="flex items-center mb-3">
                            <span class="text-3xl mr-3">🏘️</span>
                            <div>
                                <p class="text-green-100 text-sm font-medium uppercase tracking-wider">Welcome to</p>
                                <h1 class="text-3xl font-bold">Municipality of Buguey</h1>
                            </div>
                        </div>
                        <p class="text-lg text-green-50 mb-2">Good {{ now()->format('H') < 12 ? 'Morning' : (now()->format('H') < 17 ? 'Afternoon' : 'Evening') }}, <span class="font-semibold">{{ Auth::user()->name }}!</span></p>
                        <p class="text-green-100 max-w-2xl text-sm">Your gateway to efficient municipal and barangay services. Request documents, track applications, and stay connected with your local government — all in one place.</p>
                        <div class="mt-3 flex items-center text-green-200 text-xs">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Cagayan Valley Region • Province of Cagayan • Philippines</span>
                        </div>
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-6 flex-shrink-0 flex flex-col space-y-3">
                        <a href="#services" class="inline-flex items-center justify-center px-6 py-3 bg-white rounded-lg text-green-600 font-semibold hover:bg-green-50 transition-colors shadow-lg">
                            <i class="fas fa-plus-circle mr-2"></i>
                            Request a Service
                        </a>
                        <a href="#announcements" class="inline-flex items-center justify-center px-6 py-3 border-2 border-white/50 rounded-lg text-white font-medium hover:bg-white/10 transition-colors">
                            <i class="fas fa-bullhorn mr-2"></i>
                            View Announcements
                        </a>
                    </div>
                </div>
                <!-- Bottom Wave -->
                <div class="absolute bottom-0 left-0 right-0">
                    <svg viewBox="0 0 1200 60" class="w-full h-8" preserveAspectRatio="none">
                        <path d="M0,60 L0,30 Q300,0 600,30 T1200,30 L1200,60 Z" fill="rgba(255,255,255,0.1)"/>
                    </svg>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white overflow-hidden shadow-sm rounded-xl" style="border-left: 4px solid {{ theme_color('primary') }}">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-12 w-12 rounded-lg flex items-center justify-center" style="background: {{ theme_color('primary') }}15">
                                <i class="fas fa-file-alt text-xl" style="color: {{ theme_color('primary') }}"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-2xl font-bold text-gray-900">3</p>
                                <p class="text-sm text-gray-500">Active Requests</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-xl" style="border-left: 4px solid {{ theme_color('secondary') }}">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-12 w-12 rounded-lg flex items-center justify-center" style="background: {{ theme_color('secondary') }}15">
                                <i class="fas fa-certificate text-xl" style="color: {{ theme_color('secondary') }}"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-2xl font-bold text-gray-900">1</p>
                                <p class="text-sm text-gray-500">Ready for Pickup</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-xl" style="border-left: 4px solid {{ theme_color('success') }}">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-12 w-12 rounded-lg flex items-center justify-center" style="background: {{ theme_color('success') }}15">
                                <i class="fas fa-check-circle text-xl" style="color: {{ theme_color('success') }}"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-2xl font-bold text-gray-900">12</p>
                                <p class="text-sm text-gray-500">Completed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-xl" style="border-left: 4px solid {{ theme_color('info') }}">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-12 w-12 rounded-lg flex items-center justify-center" style="background: {{ theme_color('info') }}15">
                                <i class="fas fa-bell text-xl" style="color: {{ theme_color('info') }}"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-2xl font-bold text-gray-900">2</p>
                                <p class="text-sm text-gray-500">New Updates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- Left Column - 2/3 width -->
                <div class="lg:col-span-2 space-y-6">
                    
                    <!-- Municipal Services Section -->
                    <div id="services" class="bg-white shadow-sm rounded-xl">
                        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-lg flex items-center justify-center mr-3" style="background: {{ theme_color('primary') }}15">
                                    <i class="fas fa-building text-lg" style="color: {{ theme_color('primary') }}"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">LGU Buguey Services</h3>
                                    <p class="text-sm text-gray-500">Request permits, clearances, and appointments</p>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium" style="color: {{ theme_color('primary') }}">View All →</a>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <!-- Business Permit -->
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3 transition-colors" style="background: {{ theme_color('primary') }}15">
                                        <i class="fas fa-store text-2xl" style="color: {{ theme_color('primary') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Business Permit</span>
                                    <span class="text-xs text-gray-400 mt-1">BPLO</span>
                                </a>
                                
                                <!-- Working Permit -->
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('info') }}15">
                                        <i class="fas fa-id-badge text-2xl" style="color: {{ theme_color('info') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Working Permit</span>
                                    <span class="text-xs text-gray-400 mt-1">Mayor's Office</span>
                                </a>
                                
                                <!-- Tricycle Permit -->
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('secondary') }}15">
                                        <i class="fas fa-motorcycle text-2xl" style="color: {{ theme_color('secondary') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Tricycle Permit</span>
                                    <span class="text-xs text-gray-400 mt-1">Transport</span>
                                </a>
                                
                                <!-- Health Appointment -->
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('danger') }}15">
                                        <i class="fas fa-heartbeat text-2xl" style="color: {{ theme_color('danger') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Health Appointment</span>
                                    <span class="text-xs text-gray-400 mt-1">MHO</span>
                                </a>
                                
                                <!-- Zoning Clearance -->
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('success') }}15">
                                        <i class="fas fa-map-marked-alt text-2xl" style="color: {{ theme_color('success') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Zoning Clearance</span>
                                    <span class="text-xs text-gray-400 mt-1">MPDC</span>
                                </a>
                                
                                <!-- Civil Registry -->
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('primary') }}15">
                                        <i class="fas fa-file-contract text-2xl" style="color: {{ theme_color('primary') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Civil Registry</span>
                                    <span class="text-xs text-gray-400 mt-1">MCR</span>
                                </a>
                                
                                <!-- Senior Citizen -->
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('warning') }}15">
                                        <i class="fas fa-user-friends text-2xl" style="color: {{ theme_color('warning') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Senior Citizen ID</span>
                                    <span class="text-xs text-gray-400 mt-1">OSCA</span>
                                </a>
                                
                                <!-- Mayor's Clearance -->
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('info') }}15">
                                        <i class="fas fa-award text-2xl" style="color: {{ theme_color('info') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Mayor's Clearance</span>
                                    <span class="text-xs text-gray-400 mt-1">Mayor's Office</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Barangay Services Section -->
                    <div class="bg-white shadow-sm rounded-xl">
                        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-lg flex items-center justify-center mr-3" style="background: {{ theme_color('info') }}15">
                                    <i class="fas fa-home text-lg" style="color: {{ theme_color('info') }}"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Barangay Services</h3>
                                    <p class="text-sm text-gray-500">{{ Auth::user()->nameofbarangay ?? 'Your Barangay' }}, Buguey - Quick access to local services</p>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium" style="color: {{ theme_color('primary') }}">View All →</a>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('primary') }}15">
                                        <i class="fas fa-certificate text-2xl" style="color: {{ theme_color('primary') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Barangay Clearance</span>
                                </a>
                                
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('info') }}15">
                                        <i class="fas fa-home text-2xl" style="color: {{ theme_color('info') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Residency Certificate</span>
                                </a>
                                
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('warning') }}15">
                                        <i class="fas fa-wallet text-2xl" style="color: {{ theme_color('warning') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">Indigency Certificate</span>
                                </a>
                                
                                <a href="#" class="group flex flex-col items-center p-4 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:shadow-md transition-all">
                                    <div class="h-14 w-14 rounded-xl flex items-center justify-center mb-3" style="background: {{ theme_color('danger') }}15">
                                        <i class="fas fa-exclamation-triangle text-2xl" style="color: {{ theme_color('danger') }}"></i>
                                    </div>
                                    <span class="text-sm font-medium text-gray-700 text-center">File a Blotter</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- My Requests / Request Tracking -->
                    <div class="bg-white shadow-sm rounded-xl">
                        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-lg flex items-center justify-center mr-3" style="background: {{ theme_color('secondary') }}15">
                                    <i class="fas fa-clipboard-list text-lg" style="color: {{ theme_color('secondary') }}"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">My Recent Requests</h3>
                                    <p class="text-sm text-gray-500">Track the status of your applications</p>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium" style="color: {{ theme_color('primary') }}">View All →</a>
                        </div>
                        <div class="divide-y divide-gray-100">
                            <!-- Request Item 1 -->
                            <div class="p-4 hover:bg-gray-50 transition-colors">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="h-12 w-12 rounded-lg flex items-center justify-center" style="background: {{ theme_color('secondary') }}15">
                                            <i class="fas fa-certificate text-lg" style="color: {{ theme_color('secondary') }}"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900">Barangay Clearance</p>
                                            <p class="text-sm text-gray-500">Request ID: #BC-2025-0892</p>
                                            <p class="text-xs text-gray-400 mt-1"><i class="far fa-clock mr-1"></i>Submitted Dec 8, 2025</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium" style="background: {{ theme_color('warning') }}20; color: {{ theme_color('warning') }}">
                                            <span class="w-2 h-2 rounded-full mr-2" style="background: {{ theme_color('warning') }}"></span>
                                            Processing
                                        </span>
                                        <p class="text-xs text-gray-400 mt-2">Est. Dec 12, 2025</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Request Item 2 -->
                            <div class="p-4 hover:bg-gray-50 transition-colors">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="h-12 w-12 rounded-lg flex items-center justify-center" style="background: {{ theme_color('danger') }}15">
                                            <i class="fas fa-heartbeat text-lg" style="color: {{ theme_color('danger') }}"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900">Health Check Appointment</p>
                                            <p class="text-sm text-gray-500">Request ID: #MHO-2025-0456</p>
                                            <p class="text-xs text-gray-400 mt-1"><i class="far fa-clock mr-1"></i>Scheduled Dec 15, 2025 at 9:00 AM</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium" style="background: {{ theme_color('success') }}20; color: {{ theme_color('success') }}">
                                            <span class="w-2 h-2 rounded-full mr-2" style="background: {{ theme_color('success') }}"></span>
                                            Confirmed
                                        </span>
                                        <p class="text-xs text-gray-400 mt-2">MHO Office</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Request Item 3 -->
                            <div class="p-4 hover:bg-gray-50 transition-colors">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="h-12 w-12 rounded-lg flex items-center justify-center" style="background: {{ theme_color('info') }}15">
                                            <i class="fas fa-store text-lg" style="color: {{ theme_color('info') }}"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900">Business Permit Renewal</p>
                                            <p class="text-sm text-gray-500">Request ID: #BP-2025-0234</p>
                                            <p class="text-xs text-gray-400 mt-1"><i class="far fa-clock mr-1"></i>Submitted Dec 5, 2025</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium" style="background: {{ theme_color('primary') }}20; color: {{ theme_color('primary') }}">
                                            <span class="w-2 h-2 rounded-full mr-2" style="background: {{ theme_color('primary') }}"></span>
                                            Under Review
                                        </span>
                                        <p class="text-xs text-gray-400 mt-2">BPLO Office</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Request Item 4 - Ready for Pickup -->
                            <div class="p-4 hover:bg-gray-50 transition-colors" style="background: {{ theme_color('success') }}05">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="h-12 w-12 rounded-lg flex items-center justify-center" style="background: {{ theme_color('success') }}15">
                                            <i class="fas fa-id-badge text-lg" style="color: {{ theme_color('success') }}"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900">Working Permit</p>
                                            <p class="text-sm text-gray-500">Request ID: #WP-2025-0123</p>
                                            <p class="text-xs text-gray-400 mt-1"><i class="far fa-clock mr-1"></i>Approved Dec 6, 2025</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium" style="background: {{ theme_color('success') }}; color: white">
                                            <i class="fas fa-check mr-1"></i>
                                            Ready for Pickup
                                        </span>
                                        <p class="text-xs text-gray-500 mt-2 font-medium">Mayor's Office</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - 1/3 width -->
                <div class="space-y-6">
                    
                    <!-- Profile Linkage Status -->
                    <div class="bg-white shadow-sm rounded-xl">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <h3 class="text-lg font-semibold text-gray-900">Profile Status</h3>
                            <p class="text-sm text-gray-500">Your account verification status</p>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-3 rounded-lg" style="background: {{ theme_color('success') }}08">
                                    <div class="flex items-center">
                                        <i class="fas fa-envelope text-sm mr-3" style="color: {{ theme_color('success') }}"></i>
                                        <span class="text-sm text-gray-700">Email Verification</span>
                                    </div>
                                    <span class="flex items-center text-sm font-medium" style="color: {{ theme_color('success') }}">
                                        <i class="fas fa-check-circle mr-1"></i>Verified
                                    </span>
                                </div>
                                
                                <div class="flex items-center justify-between p-3 rounded-lg" style="background: {{ theme_color('success') }}08">
                                    <div class="flex items-center">
                                        <i class="fas fa-map-marker-alt text-sm mr-3" style="color: {{ theme_color('success') }}"></i>
                                        <span class="text-sm text-gray-700">Barangay Records</span>
                                    </div>
                                    <span class="flex items-center text-sm font-medium" style="color: {{ theme_color('success') }}">
                                        <i class="fas fa-check-circle mr-1"></i>Linked
                                    </span>
                                </div>
                                
                                <div class="flex items-center justify-between p-3 rounded-lg" style="background: {{ theme_color('success') }}08">
                                    <div class="flex items-center">
                                        <i class="fas fa-id-card text-sm mr-3" style="color: {{ theme_color('success') }}"></i>
                                        <span class="text-sm text-gray-700">ID Verification</span>
                                    </div>
                                    <span class="flex items-center text-sm font-medium" style="color: {{ theme_color('success') }}">
                                        <i class="fas fa-check-circle mr-1"></i>Completed
                                    </span>
                                </div>
                                
                                <div class="flex items-center justify-between p-3 rounded-lg" style="background: {{ theme_color('warning') }}08">
                                    <div class="flex items-center">
                                        <i class="fas fa-users text-sm mr-3" style="color: {{ theme_color('warning') }}"></i>
                                        <span class="text-sm text-gray-700">Family Records</span>
                                    </div>
                                    <span class="flex items-center text-sm font-medium" style="color: {{ theme_color('warning') }}">
                                        <i class="fas fa-exclamation-circle mr-1"></i>Incomplete
                                    </span>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <a href="{{ route('profile.edit') }}" class="w-full flex justify-center items-center py-2.5 px-4 rounded-lg text-sm font-medium text-white transition-colors" style="background: {{ theme_gradient('primary') }}">
                                    <i class="fas fa-user-edit mr-2"></i>
                                    Complete Your Profile
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Announcements & News -->
                    <div id="announcements" class="bg-white shadow-sm rounded-xl">
                        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-lg flex items-center justify-center mr-2" style="background: {{ theme_color('warning') }}15">
                                    <i class="fas fa-bullhorn text-sm" style="color: {{ theme_color('warning') }}"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">Updates & News</h3>
                            </div>
                            <a href="#" class="text-sm font-medium" style="color: {{ theme_color('primary') }}">View All</a>
                        </div>
                        <div class="p-4 space-y-4">
                            <!-- News Item 1 -->
                            <div class="p-3 rounded-lg border-l-4 bg-gray-50" style="border-color: {{ theme_color('info') }}">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">New Health Program Launch</p>
                                        <p class="text-xs text-gray-400 mt-1"><i class="far fa-calendar mr-1"></i>Dec 9, 2025</p>
                                    </div>
                                    <span class="px-2 py-0.5 text-xs rounded" style="background: {{ theme_color('info') }}20; color: {{ theme_color('info') }}">Health</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Senior citizen health check-up program now available at MHO...</p>
                            </div>
                            
                            <!-- News Item 2 -->
                            <div class="p-3 rounded-lg border-l-4 bg-gray-50" style="border-color: {{ theme_color('warning') }}">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">Office Schedule Update</p>
                                        <p class="text-xs text-gray-400 mt-1"><i class="far fa-calendar mr-1"></i>Dec 8, 2025</p>
                                    </div>
                                    <span class="px-2 py-0.5 text-xs rounded" style="background: {{ theme_color('warning') }}20; color: {{ theme_color('warning') }}">Notice</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Extended office hours during permit renewal season...</p>
                            </div>
                            
                            <!-- News Item 3 -->
                            <div class="p-3 rounded-lg border-l-4 bg-gray-50" style="border-color: {{ theme_color('primary') }}">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">Buguey Fiesta 2025</p>
                                        <p class="text-xs text-gray-400 mt-1"><i class="far fa-calendar mr-1"></i>Dec 7, 2025</p>
                                    </div>
                                    <span class="px-2 py-0.5 text-xs rounded" style="background: {{ theme_color('primary') }}20; color: {{ theme_color('primary') }}">Event</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-2">Annual Buguey town fiesta celebration starts December 20...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Contact / Help -->
                    <div class="bg-white shadow-sm rounded-xl">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <h3 class="text-lg font-semibold text-gray-900">Need Help?</h3>
                            <p class="text-sm text-gray-500">Contact LGU Buguey</p>
                        </div>
                        <div class="p-4 space-y-3">
                            <a href="tel:+639123456789" class="flex items-center p-3 rounded-lg border border-gray-100 hover:border-green-200 hover:shadow-sm transition-all">
                                <div class="h-10 w-10 rounded-lg flex items-center justify-center mr-3" style="background: {{ theme_color('primary') }}15">
                                    <i class="fas fa-phone" style="color: {{ theme_color('primary') }}"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Hotline</p>
                                    <p class="text-xs text-gray-500">+63 912 345 6789</p>
                                </div>
                            </a>
                            
                            <a href="mailto:help@buguey.gov.ph" class="flex items-center p-3 rounded-lg border border-gray-100 hover:border-green-200 hover:shadow-sm transition-all">
                                <div class="h-10 w-10 rounded-lg flex items-center justify-center mr-3" style="background: {{ theme_color('info') }}15">
                                    <i class="fas fa-envelope" style="color: {{ theme_color('info') }}"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Email Support</p>
                                    <p class="text-xs text-gray-500">help@buguey.gov.ph</p>
                                </div>
                            </a>
                            
                            <a href="#" class="flex items-center p-3 rounded-lg border border-gray-100 hover:border-green-200 hover:shadow-sm transition-all">
                                <div class="h-10 w-10 rounded-lg flex items-center justify-center mr-3" style="background: {{ theme_color('secondary') }}15">
                                    <i class="fas fa-comment-dots" style="color: {{ theme_color('secondary') }}"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Submit Feedback</p>
                                    <p class="text-xs text-gray-500">Share your experience</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Barangay Info Card -->
                    <div class="rounded-xl overflow-hidden" style="background: {{ theme_gradient('primary') }}">
                        <div class="p-6 text-white">
                            <div class="flex items-center mb-4">
                                <div class="h-12 w-12 rounded-full bg-white/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-green-100 text-sm">Your Barangay</p>
                                    <p class="font-bold text-lg">{{ Auth::user()->nameofbarangay ?? 'Not Assigned' }}</p>
                                </div>
                            </div>
                            <p class="text-green-100 text-xs mb-3"><i class="fas fa-location-dot mr-1"></i> Buguey, Cagayan</p>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-green-100">Barangay Captain</span>
                                    <span class="font-medium">Hon. Juan Dela Cruz</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-green-100">Contact</span>
                                    <span class="font-medium">+63 912 XXX XXXX</span>
                                </div>
                            </div>
                            <a href="#" class="mt-4 block text-center py-2 bg-white/20 rounded-lg text-sm font-medium hover:bg-white/30 transition-colors">
                                View Barangay Info
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
