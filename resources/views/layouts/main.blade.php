<!DOCTYPE html>
<html lang="id" x-data="{ mobileMenuOpen: false, darkMode: false }" :class="darkMode ? 'dark' : ''">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WebSiteInAja - Jasa Pembuatan Website Profesional')</title>
    <meta name="description" content="Kami menyediakan jasa pembuatan website profesional, responsif, dan SEO-friendly untuk bisnis Anda.">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                        },
                        secondary: {
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Alpine JS CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        }
        .text-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hover-lift {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .section-padding {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
        @media (max-width: 768px) {
            .section-padding {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
        }
    </style>

    @stack('styles')
</head>
<body class="font-sans text-gray-800 bg-gray-50 dark:bg-gray-900 dark:text-gray-200">
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Back to Top Button -->
    <button
        x-data="{ show: false }"
        x-on:scroll.window="show = window.scrollY > 300"
        x-show="show"
        x-transition
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-6 right-6 bg-primary-600 text-white p-3 rounded-full shadow-lg hover:bg-primary-700 transition-colors z-40">
        <i class="fas fa-arrow-up"></i>
    </button>

    @stack('scripts')
</body>
</html>