<nav class="sticky top-0 z-50 bg-white/90 dark:bg-gray-900/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="h-10 w-10 gradient-bg rounded-lg flex items-center justify-center">
                    <i class="fas fa-code text-white text-xl"></i>
                </div>
                <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800 dark:text-white">
                    WebSiteIn<span class="text-primary-600">Aja</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors {{ request()->routeIs('home') ? 'text-primary-600 dark:text-primary-400' : '' }}">
                    Home
                </a>
                <a href="{{ route('layanan') }}" class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors {{ request()->routeIs('layanan') ? 'text-primary-600 dark:text-primary-400' : '' }}">
                    Layanan
                </a>
                <a href="{{ route('portofolio') }}" class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors {{ request()->routeIs('portofolio') ? 'text-primary-600 dark:text-primary-400' : '' }}">
                    Portofolio
                </a>
                <a href="{{ route('kontak') }}" class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors {{ request()->routeIs('kontak') ? 'text-primary-600 dark:text-primary-400' : '' }}">
                    Kontak
                </a>

                <!-- CTA Button -->
                <a href="{{ route('kontak') }}" class="bg-primary-600 hover:bg-primary-700 text-white font-medium px-6 py-2 rounded-lg transition-colors">
                    Konsultasi Gratis
                </a>

                <!-- Dark Mode Toggle -->
                <button
                    @click="darkMode = !darkMode"
                    class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">
                    <i x-show="!darkMode" class="fas fa-moon"></i>
                    <i x-show="darkMode" class="fas fa-sun"></i>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="md:hidden p-2 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                <i x-show="!mobileMenuOpen" class="fas fa-bars text-xl"></i>
                <i x-show="mobileMenuOpen" class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div
            x-show="mobileMenuOpen"
            x-transition
            class="md:hidden mt-4 pb-4 border-t border-gray-200 dark:border-gray-800 pt-4">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors py-2 {{ request()->routeIs('home') ? 'text-primary-600 dark:text-primary-400' : '' }}">
                    Home
                </a>
                <a href="{{ route('layanan') }}" class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors py-2 {{ request()->routeIs('layanan') ? 'text-primary-600 dark:text-primary-400' : '' }}">
                    Layanan
                </a>
                <a href="{{ route('portofolio') }}" class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors py-2 {{ request()->routeIs('portofolio') ? 'text-primary-600 dark:text-primary-400' : '' }}">
                    Portofolio
                </a>
                <a href="{{ route('kontak') }}" class="font-medium hover:text-primary-600 dark:hover:text-primary-400 transition-colors py-2 {{ request()->routeIs('kontak') ? 'text-primary-600 dark:text-primary-400' : '' }}">
                    Kontak
                </a>

                <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-800">
                    <a href="{{ route('kontak') }}" class="bg-primary-600 hover:bg-primary-700 text-white font-medium px-6 py-2 rounded-lg transition-colors">
                        Konsultasi Gratis
                    </a>

                    <button
                        @click="darkMode = !darkMode"
                        class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300">
                        <i x-show="!darkMode" class="fas fa-moon"></i>
                        <i x-show="darkMode" class="fas fa-sun"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
