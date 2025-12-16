<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ResidenteApp') }} - Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #20B62A;
            --primary-dark: #118D1A;
            --primary-light: #86EFAC;
        }
        
        .form-section {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-left: 4px solid var(--primary);
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 1.5rem;
        }
        
        .form-section h3 {
            color: var(--primary-dark);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-section h3 i {
            color: var(--primary);
        }
        
        .form-input, .form-select {
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 0.625rem 0.875rem;
            transition: all 0.2s ease;
        }
        
        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(32, 182, 42, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(32, 182, 42, 0.3);
        }
        
        .radio-option {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .radio-option:has(input:checked) {
            border-color: var(--primary);
            background: rgba(32, 182, 42, 0.05);
        }
        
        .radio-option input[type="radio"] {
            accent-color: var(--primary);
        }
        
        .checkbox-styled {
            accent-color: var(--primary);
        }
        
        .link-primary {
            color: var(--primary);
        }
        
        .link-primary:hover {
            color: var(--primary-dark);
        }
        
        .info-box {
            background: linear-gradient(135deg, rgba(32, 182, 42, 0.05) 0%, rgba(17, 141, 26, 0.05) 100%);
            border: 1px solid var(--primary-light);
            border-radius: 0.75rem;
        }
        
        .info-box i {
            color: var(--primary);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-2xl">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-br from-green-500 to-green-700 mb-4">
                    <i class="fas fa-user-plus text-2xl text-white"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900">Create Your Account</h2>
                <p class="mt-2 text-sm text-gray-600">Join ResidenteApp to access municipal and barangay services online.</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Account Type -->
                <input type="hidden" name="account_type" value="citizen">

                <!-- Personal Information Section -->
                <div class="form-section">
                    <h3 class="font-semibold text-lg mb-4">
                        <i class="fas fa-user"></i>
                        Personal Information
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- First Name -->
                        <div>
                            <x-input-label for="fname" :value="__('First Name')" class="text-gray-700 font-medium" />
                            <x-text-input id="fname" class="form-input block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="given-name" placeholder="Juan" />
                            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                        </div>

                        <!-- Middle Name/Initial -->
                        <div>
                            <x-input-label for="mname" :value="__('Middle Name/Initial')" class="text-gray-700 font-medium" />
                            <x-text-input id="mname" class="form-input block mt-1 w-full" type="text" name="mname" :value="old('mname')" autocomplete="additional-name" placeholder="Santos" />
                            <x-input-error :messages="$errors->get('mname')" class="mt-2" />
                        </div>

                        <!-- Surname -->
                        <div>
                            <x-input-label for="lname" :value="__('Surname')" class="text-gray-700 font-medium" />
                            <x-text-input id="lname" class="form-input block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autocomplete="family-name" placeholder="Dela Cruz" />
                            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                        </div>

                        <!-- Extension Name -->
                        <div>
                            <x-input-label for="ext_name" :value="__('Extension Name')" class="text-gray-700 font-medium" />
                            <select id="ext_name" name="ext_name" class="form-select block mt-1 w-full">
                                <option value="">None</option>
                                <option value="Jr." {{ old('ext_name') == 'Jr.' ? 'selected' : '' }}>Jr.</option>
                                <option value="Sr." {{ old('ext_name') == 'Sr.' ? 'selected' : '' }}>Sr.</option>
                                <option value="II" {{ old('ext_name') == 'II' ? 'selected' : '' }}>II</option>
                                <option value="III" {{ old('ext_name') == 'III' ? 'selected' : '' }}>III</option>
                                <option value="IV" {{ old('ext_name') == 'IV' ? 'selected' : '' }}>IV</option>
                                <option value="V" {{ old('ext_name') == 'V' ? 'selected' : '' }}>V</option>
                            </select>
                            <x-input-error :messages="$errors->get('ext_name')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Date of Birth Dropdowns -->
                    <div class="mt-4">
                        <x-input-label :value="__('Date of Birth')" class="text-gray-700 font-medium" />
                        <div class="grid grid-cols-3 gap-4 mt-1">
                            <!-- Month -->
                            <div>
                                <select id="dob_month" name="dob_month" class="form-select block w-full" required>
                                    <option value="">Month</option>
                                    <option value="01" {{ old('dob_month') == '01' ? 'selected' : '' }}>January</option>
                                    <option value="02" {{ old('dob_month') == '02' ? 'selected' : '' }}>February</option>
                                    <option value="03" {{ old('dob_month') == '03' ? 'selected' : '' }}>March</option>
                                    <option value="04" {{ old('dob_month') == '04' ? 'selected' : '' }}>April</option>
                                    <option value="05" {{ old('dob_month') == '05' ? 'selected' : '' }}>May</option>
                                    <option value="06" {{ old('dob_month') == '06' ? 'selected' : '' }}>June</option>
                                    <option value="07" {{ old('dob_month') == '07' ? 'selected' : '' }}>July</option>
                                    <option value="08" {{ old('dob_month') == '08' ? 'selected' : '' }}>August</option>
                                    <option value="09" {{ old('dob_month') == '09' ? 'selected' : '' }}>September</option>
                                    <option value="10" {{ old('dob_month') == '10' ? 'selected' : '' }}>October</option>
                                    <option value="11" {{ old('dob_month') == '11' ? 'selected' : '' }}>November</option>
                                    <option value="12" {{ old('dob_month') == '12' ? 'selected' : '' }}>December</option>
                                </select>
                            </div>
                            <!-- Day -->
                            <div>
                                <select id="dob_day" name="dob_day" class="form-select block w-full" required>
                                    <option value="">Day</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}" {{ old('dob_day') == str_pad($i, 2, '0', STR_PAD_LEFT) ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <!-- Year -->
                            <div>
                                <select id="dob_year" name="dob_year" class="form-select block w-full" required>
                                    <option value="">Year</option>
                                    @for ($i = date('Y'); $i >= 1900; $i--)
                                        <option value="{{ $i }}" {{ old('dob_year') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('dob_month')" class="mt-2" />
                        <x-input-error :messages="$errors->get('dob_day')" class="mt-2" />
                        <x-input-error :messages="$errors->get('dob_year')" class="mt-2" />
                    </div>

                    <!-- Sex -->
                    <div class="mt-4">
                        <x-input-label :value="__('Sex')" class="text-gray-700 font-medium" />
                        <div class="flex gap-4 mt-2">
                            <label class="radio-option flex-1">
                                <input type="radio" name="sex" value="Male" class="mr-2" {{ old('sex') == 'Male' ? 'checked' : '' }} required>
                                <i class="fas fa-mars mr-2 text-blue-500"></i>
                                <span class="text-sm text-gray-700">Male</span>
                            </label>
                            <label class="radio-option flex-1">
                                <input type="radio" name="sex" value="Female" class="mr-2" {{ old('sex') == 'Female' ? 'checked' : '' }}>
                                <i class="fas fa-venus mr-2 text-pink-500"></i>
                                <span class="text-sm text-gray-700">Female</span>
                            </label>
                        </div>
                        <x-input-error :messages="$errors->get('sex')" class="mt-2" />
                    </div>
                </div>

                <!-- Address Section -->
                <div class="form-section">
                    <h3 class="font-semibold text-lg mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                        Address
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- House Number -->
                        <div>
                            <x-input-label for="house_number" :value="__('House Number')" class="text-gray-700 font-medium" />
                            <x-text-input id="house_number" class="form-input block mt-1 w-full" type="text" name="house_number" :value="old('house_number')" placeholder="e.g., 123" />
                            <x-input-error :messages="$errors->get('house_number')" class="mt-2" />
                        </div>

                        <!-- Zone -->
                        <div>
                            <x-input-label for="zone" :value="__('Zone/Purok')" class="text-gray-700 font-medium" />
                            <x-text-input id="zone" class="form-input block mt-1 w-full" type="text" name="zone" :value="old('zone')" placeholder="e.g., Zone 1 or Purok 2" />
                            <x-input-error :messages="$errors->get('zone')" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <!-- Street Address -->
                        <div>
                            <x-input-label for="street_address" :value="__('Street Address')" class="text-gray-700 font-medium" />
                            <x-text-input id="street_address" class="form-input block mt-1 w-full" type="text" name="street_address" :value="old('street_address')" placeholder="e.g., Rizal Street" />
                            <x-input-error :messages="$errors->get('street_address')" class="mt-2" />
                        </div>

                        <!-- Barangay -->
                        <div>
                            <x-input-label for="nameofbarangay" :value="__('Barangay')" class="text-gray-700 font-medium" />
                            <select id="nameofbarangay" name="nameofbarangay" class="form-select block mt-1 w-full" required>
                                <option value="">Select Barangay</option>
                                <option value="Barangay 1" {{ old('nameofbarangay') == 'Barangay 1' ? 'selected' : '' }}>Barangay 1</option>
                                <option value="Barangay 2" {{ old('nameofbarangay') == 'Barangay 2' ? 'selected' : '' }}>Barangay 2</option>
                                <option value="Barangay 3" {{ old('nameofbarangay') == 'Barangay 3' ? 'selected' : '' }}>Barangay 3</option>
                                <option value="Barangay 4" {{ old('nameofbarangay') == 'Barangay 4' ? 'selected' : '' }}>Barangay 4</option>
                                <option value="Barangay 5" {{ old('nameofbarangay') == 'Barangay 5' ? 'selected' : '' }}>Barangay 5</option>
                                <option value="Barangay 6" {{ old('nameofbarangay') == 'Barangay 6' ? 'selected' : '' }}>Barangay 6</option>
                                <option value="Barangay 7" {{ old('nameofbarangay') == 'Barangay 7' ? 'selected' : '' }}>Barangay 7</option>
                                <option value="Barangay 8" {{ old('nameofbarangay') == 'Barangay 8' ? 'selected' : '' }}>Barangay 8</option>
                            </select>
                            <x-input-error :messages="$errors->get('nameofbarangay')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Contact Information Section -->
                <div class="form-section">
                    <h3 class="font-semibold text-lg mb-4">
                        <i class="fas fa-phone-alt"></i>
                        Contact Information
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email Address')" class="text-gray-700 font-medium" />
                            <x-text-input id="email" class="form-input block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="your.email@example.com" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <p class="text-xs text-gray-500 mt-1">Used for account verification and notifications.</p>
                        </div>

                        <!-- Cellphone Number -->
                        <div>
                            <x-input-label for="contact_number" :value="__('Cellphone Number')" class="text-gray-700 font-medium" />
                            <x-text-input id="contact_number" class="form-input block mt-1 w-full" type="tel" name="contact_number" :value="old('contact_number')" required placeholder="09XX XXX XXXX" />
                            <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Account Security Section -->
                <div class="form-section">
                    <h3 class="font-semibold text-lg mb-4">
                        <i class="fas fa-lock"></i>
                        Account Security
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
                            <x-text-input id="password" class="form-input block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <p class="text-xs text-gray-500 mt-1">Minimum 8 characters</p>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 font-medium" />
                            <x-text-input id="password_confirmation" class="form-input block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="terms" class="checkbox-styled rounded border-gray-300 shadow-sm" required>
                        <span class="ml-2 text-sm text-gray-600">
                            I agree to the 
                            <a href="#" class="link-primary font-medium hover:underline">Terms of Service</a> 
                            and 
                            <a href="#" class="link-primary font-medium hover:underline">Privacy Policy</a>
                        </span>
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    <a class="text-sm text-gray-600 hover:text-gray-900 link-primary font-medium" href="{{ route('login') }}">
                        <i class="fas fa-arrow-left mr-1"></i>
                        {{ __('Already have an account?') }}
                    </a>

                    <button type="submit" class="btn-primary">
                        <i class="fas fa-user-plus mr-2"></i>
                        {{ __('Create Account') }}
                    </button>
                </div>
            </form>

            <!-- Info Box -->
            <div class="info-box mt-6 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-semibold text-gray-800">What happens after registration?</h3>
                        <div class="mt-2 text-sm text-gray-600">
                            <ul class="space-y-1">
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Email verification will be sent to your email address</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Your account will be linked to official barangay records</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>You can start requesting permits, clearances, and appointments</li>
                                <li><i class="fas fa-check text-green-500 mr-2"></i>Access to real-time updates and municipal services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
