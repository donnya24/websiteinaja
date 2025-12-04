@extends('layouts.main')

@section('title', 'Layanan - WebSiteInAja')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-bg text-white">
        <div class="container mx-auto px-4 py-20">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Layanan <span class="text-yellow-300">Kami</span></h1>
                <p class="text-xl opacity-90">
                    Solusi digital lengkap untuk mengembangkan bisnis Anda di era digital. Dari website sederhana hingga aplikasi web kompleks.
                </p>
            </div>
        </div>
    </section>

    <!-- Layanan Detail -->
    <section class="bg-white dark:bg-gray-900 section-padding">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-400 font-medium mb-4">
                        <i class="fas fa-laptop-code mr-2"></i> Website Perusahaan
                    </div>
                    <h2 class="text-3xl font-bold mb-6">Website Profesional untuk Meningkatkan Kredibilitas</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Kami membuat website perusahaan yang tidak hanya menarik secara visual, tetapi juga fungsional dan mudah dikelola. Website yang kami buat akan membantu meningkatkan kepercayaan pelanggan terhadap brand Anda.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Desain responsif yang menyesuaikan dengan semua ukuran layar</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Sistem Content Management (CMS) untuk update konten mudah</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Optimasi SEO untuk peringkat lebih tinggi di mesin pencari</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Integrasi media sosial dan analitik trafik</span>
                        </li>
                    </ul>
                    <a href="{{ route('kontak') }}" class="bg-primary-600 hover:bg-primary-700 text-white font-bold px-6 py-3 rounded-lg transition-colors inline-flex items-center">
                        Konsultasi Sekarang <i class="ml-2 fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="bg-linear-to-br from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 p-8 rounded-2xl">
                    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg p-6">
                        <h3 class="text-xl font-bold mb-4">Paket Website Perusahaan</h3>
                        <div class="text-3xl font-bold mb-2">Rp 8.500.000<span class="text-lg font-normal text-gray-500">/project</span></div>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Harga mulai untuk website perusahaan standar</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>5 Halaman Website</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Desain Responsif</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Sistem CMS</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Galeri Foto</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Form Kontak</span>
                            </li>
                        </ul>

                        <button onclick="window.location.href='{{ route('kontak') }}'" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 rounded-lg transition-colors">
                            Pilih Paket Ini
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div class="order-2 lg:order-1">
                    <div class="bg-linear-to-br from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 p-8 rounded-2xl">
                        <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg p-6">
                            <h3 class="text-xl font-bold mb-4">Paket E-Commerce</h3>
                            <div class="text-3xl font-bold mb-2">Rp 15.000.000<span class="text-lg font-normal text-gray-500">/project</span></div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Harga mulai untuk toko online lengkap</p>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Halaman Produk & Kategori</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Sistem Keranjang Belanja</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Integrasi Payment Gateway</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Admin Dashboard</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span>Manajemen Stok</span>
                                </li>
                            </ul>

                            <button onclick="window.location.href='{{ route('kontak') }}'" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 rounded-lg transition-colors">
                                Pilih Paket Ini
                            </button>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 font-medium mb-4">
                        <i class="fas fa-shopping-cart mr-2"></i> E-Commerce
                    </div>
                    <h2 class="text-3xl font-bold mb-6">Toko Online untuk Meningkatkan Penjualan</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Kembangkan bisnis Anda dengan toko online yang lengkap dan profesional. Kami membuat platform e-commerce dengan fitur lengkap untuk memudahkan penjualan online.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Katalog produk dengan sistem kategori dan filter</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Sistem keranjang belanja dan checkout yang aman</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Integrasi dengan berbagai payment gateway (Midtrans, Xendit, dll)</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                            <span>Dashboard admin untuk manajemen produk, pesanan, dan pelanggan</span>
                        </li>
                    </ul>
                    <a href="{{ route('kontak') }}" class="bg-primary-600 hover:bg-primary-700 text-white font-bold px-6 py-3 rounded-lg transition-colors inline-flex items-center">
                        Diskusikan Project Anda <i class="ml-2 fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Lainnya -->
    <section class="bg-gray-50 dark:bg-gray-800 section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Layanan <span class="text-gradient">Lainnya</span></h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Selain pembuatan website, kami juga menyediakan layanan pendukung untuk kesuksesan digital bisnis Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-900 p-8 rounded-xl hover-lift">
                    <div class="h-16 w-16 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 text-2xl mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">SEO Optimization</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Optimasi website untuk peringkat lebih tinggi di mesin pencari seperti Google, meningkatkan visibilitas dan trafik organik.
                    </p>
                    <a href="{{ route('kontak') }}" class="text-primary-600 dark:text-primary-400 font-medium">
                        Pelajari Lebih Lanjut
                    </a>
                </div>


                <div class="bg-white dark:bg-gray-900 p-8 rounded-xl hover-lift">
                    <div class="h-16 w-16 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600 dark:text-green-400 text-2xl mb-6">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Training & Support</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Pelatihan penggunaan website dan dukungan teknis untuk memastikan Anda dapat mengelola website dengan maksimal.
                    </p>
                    <a href="{{ route('kontak') }}" class="text-primary-600 dark:text-primary-400 font-medium">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-linear-to-r from-primary-700 to-secondary-600 text-white section-padding">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Tidak Tahu Layanan Mana yang Cocok?
            </h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto opacity-90">
                Tim konsultan kami siap membantu menganalisis kebutuhan bisnis Anda dan merekomendasikan solusi terbaik.
            </p>
            <a href="{{ route('kontak') }}" class="bg-white text-primary-700 hover:bg-gray-100 font-bold px-10 py-4 rounded-lg text-lg transition-colors">
                Konsultasi Gratis Sekarang
            </a>
        </div>
    </section>
@endsection