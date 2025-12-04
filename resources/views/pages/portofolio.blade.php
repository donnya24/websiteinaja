@extends('layouts.main')

@section('title', 'Portofolio - WebSiteInAja')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-bg text-white">
        <div class="container mx-auto px-4 py-20">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Portfolio <span class="text-yellow-300">Kami</span></h1>
                <p class="text-xl opacity-90">
                    Jelajahi berbagai project website yang telah kami selesaikan untuk klien dari berbagai industri.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Filter & Gallery -->
    <section class="bg-white dark:bg-gray-900 section-padding">
        <div class="container mx-auto px-4">
            <!-- Filter -->
            <div class="flex flex-wrap justify-center gap-4 mb-12" x-data="{ activeFilter: 'all' }">
                <button 
                    @click="activeFilter = 'all'"
                    :class="activeFilter === 'all' ? 'bg-primary-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300'"
                    class="px-6 py-2 rounded-full font-medium transition-colors">
                    Semua
                </button>
                <button 
                    @click="activeFilter = 'ecommerce'"
                    :class="activeFilter === 'ecommerce' ? 'bg-primary-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300'"
                    class="px-6 py-2 rounded-full font-medium transition-colors">
                    E-Commerce
                </button>
                <button 
                    @click="activeFilter = 'company'"
                    :class="activeFilter === 'company' ? 'bg-primary-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300'"
                    class="px-6 py-2 rounded-full font-medium transition-colors">
                    Perusahaan
                </button>
                <button 
                    @click="activeFilter = 'education'"
                    :class="activeFilter === 'education' ? 'bg-primary-600 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300'"
                    class="px-6 py-2 rounded-full font-medium transition-colors">
                    Pendidikan
                </button>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Item 1 - E-commerce -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover-lift">
                    <div class="h-48 bg-linear-to-r from-pink-500 to-rose-600 flex items-center justify-center">
                        <i class="fas fa-shopping-bag text-white text-6xl opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <div class="inline-block px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-400 rounded-full text-sm font-medium mb-4">
                            E-Commerce
                        </div>
                        <h3 class="text-xl font-bold mb-2">Belle Mode - Fashion Store</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Toko online fashion dengan sistem inventory, payment gateway terintegrasi, dan dashboard admin lengkap.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Selesai dalam 45 hari</span>
                            <span class="text-primary-600 dark:text-primary-400 font-medium">
                                Lihat Detail
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Item 2 - Company -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover-lift">
                    <div class="h-48 bg-linear-to-r from-blue-500 to-cyan-600 flex items-center justify-center">
                        <i class="fas fa-building text-white text-6xl opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <div class="inline-block px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 rounded-full text-sm font-medium mb-4">
                            Perusahaan
                        </div>
                        <h3 class="text-xl font-bold mb-2">BuildCon - Konstruksi</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Website perusahaan konstruksi dengan galeri project, sistem kontak, dan halaman layanan yang lengkap.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Selesai dalam 30 hari</span>
                            <span class="text-primary-600 dark:text-primary-400 font-medium">
                                Lihat Detail
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Item 4 - Education -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover-lift">
                    <div class="h-48 bg-linear-to-r from-emerald-500 to-teal-600 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-6xl opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <div class="inline-block px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 rounded-full text-sm font-medium mb-4">
                            Pendidikan
                        </div>
                        <h3 class="text-xl font-bold mb-2">EduSmart Learning</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Platform kursus online dengan sistem manajemen siswa, video pembelajaran, dan kuis interaktif.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Selesai dalam 60 hari</span>
                            <span class="text-primary-600 dark:text-primary-400 font-medium">
                                Lihat Detail
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Item 5 - E-commerce -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover-lift">
                    <div class="h-48 bg-linear-to-r from-violet-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-camera text-white text-6xl opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <div class="inline-block px-3 py-1 bg-violet-100 dark:bg-violet-900/30 text-violet-700 dark:text-violet-400 rounded-full text-sm font-medium mb-4">
                            E-Commerce
                        </div>
                        <h3 class="text-xl font-bold mb-2">LensaKita - Fotografi</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Marketplace peralatan fotografi dengan sistem review produk, perbandingan harga, dan blog fotografi.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Selesai dalam 50 hari</span>
                            <span class="text-primary-600 dark:text-primary-400 font-medium">
                                Lihat Detail
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Item 6 - Company -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden hover-lift">
                    <div class="h-48 bg-linear-to-r from-rose-500 to-pink-600 flex items-center justify-center">
                        <i class="fas fa-heart text-white text-6xl opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <div class="inline-block px-3 py-1 bg-rose-100 dark:bg-rose-900/30 text-rose-700 dark:text-rose-400 rounded-full text-sm font-medium mb-4">
                            Perusahaan
                        </div>
                        <h3 class="text-xl font-bold mb-2">HealthCare Plus</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Website klinik kesehatan dengan sistem booking dokter, informasi layanan, dan artikel kesehatan.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">Selesai dalam 35 hari</span>
                            <span class="text-primary-600 dark:text-primary-400 font-medium">
                                Lihat Detail
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-16">
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto">
                    Tertarik untuk membuat website seperti ini untuk bisnis Anda?
                </p>
                <a href="{{ route('kontak') }}" class="bg-primary-600 hover:bg-primary-700 text-white font-bold px-10 py-4 rounded-lg text-lg transition-colors inline-flex items-center">
                    <i class="fas fa-calendar-alt mr-3"></i> Konsultasi Gratis Sekarang
                </a>
            </div>
        </div>
    </section>
@endsection