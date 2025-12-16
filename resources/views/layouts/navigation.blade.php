<nav x-data="{ open: false }" class="border-b border-gray-100" style="background: {{ theme_gradient('primary') }}">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <div class="h-10 w-10 bg-white rounded-full flex items-center justify-center mr-3">
                            <span class="text-lg font-bold" style="color: {{ theme_color('primary') }}">OA</span>
                        </div>
                        <span class="text-white font-bold text-lg hidden sm:block">OneAparri</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-6 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out {{ request()->routeIs('dashboard') ? 'border-white text-white' : 'border-transparent text-green-100 hover:text-white hover:border-green-200' }}">
                        <i class="fas fa-home mr-2"></i>Dashboard
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-green-100 hover:text-white hover:border-green-200 transition duration-150 ease-in-out">
                        <i class="fas fa-file-alt mr-2"></i>My Requests
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-green-100 hover:text-white hover:border-green-200 transition duration-150 ease-in-out">
                        <i class="fas fa-building mr-2"></i>Services
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-green-100 hover:text-white hover:border-green-200 transition duration-150 ease-in-out">
                        <i class="fas fa-bullhorn mr-2"></i>Announcements
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Notifications -->
                <div class="relative mr-4">
                    <button class="text-green-100 hover:text-white relative">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute -top-1 -right-1 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">2</span>
                    </button>
                </div>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-green-400 text-sm leading-4 font-medium rounded-md text-white bg-transparent hover:bg-green-600 focus:outline-none transition ease-in-out duration-150">
                            <div class="h-8 w-8 rounded-full bg-white flex items-center justify-center mr-2">
                                <span class="text-sm font-bold" style="color: {{ theme_color('primary') }}">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            <i class="fas fa-user mr-2"></i>{{ __('My Profile') }}
                        </x-dropdown-link>
                        
                        <x-dropdown-link href="#">
                            <i class="fas fa-cog mr-2"></i>{{ __('Settings') }}
                        </x-dropdown-link>
                        
                        <x-dropdown-link href="#">
                            <i class="fas fa-question-circle mr-2"></i>{{ __('Help & Support') }}
                        </x-dropdown-link>

                        <hr class="my-1">

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-green-100 hover:text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-green-700">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" class="block w-full ps-3 pe-4 py-2 border-l-4 text-start text-base font-medium transition duration-150 ease-in-out {{ request()->routeIs('dashboard') ? 'border-white text-white bg-green-800' : 'border-transparent text-green-100 hover:text-white hover:bg-green-600 hover:border-green-300' }}">
                <i class="fas fa-home mr-2"></i>Dashboard
            </a>
            <a href="#" class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-green-100 hover:text-white hover:bg-green-600 hover:border-green-300 transition duration-150 ease-in-out">
                <i class="fas fa-file-alt mr-2"></i>My Requests
            </a>
            <a href="#" class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-green-100 hover:text-white hover:bg-green-600 hover:border-green-300 transition duration-150 ease-in-out">
                <i class="fas fa-building mr-2"></i>Services
            </a>
            <a href="#" class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-green-100 hover:text-white hover:bg-green-600 hover:border-green-300 transition duration-150 ease-in-out">
                <i class="fas fa-bullhorn mr-2"></i>Announcements
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-green-600">
            <div class="px-4 flex items-center">
                <div class="h-10 w-10 rounded-full bg-white flex items-center justify-center mr-3">
                    <span class="text-lg font-bold" style="color: {{ theme_color('primary') }}">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
                <div>
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-green-200">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}" class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-green-100 hover:text-white hover:bg-green-600 hover:border-green-300 transition duration-150 ease-in-out">
                    <i class="fas fa-user mr-2"></i>{{ __('My Profile') }}
                </a>
                
                <a href="#" class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-green-100 hover:text-white hover:bg-green-600 hover:border-green-300 transition duration-150 ease-in-out">
                    <i class="fas fa-cog mr-2"></i>{{ __('Settings') }}
                </a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-green-100 hover:text-white hover:bg-green-600 hover:border-green-300 transition duration-150 ease-in-out">
                        <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
