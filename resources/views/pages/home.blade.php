@extends('layouts.main')

@section('title', 'Home - WebSiteInAja')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-bg text-white">
        <div class="container mx-auto px-4 section-padding">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Transformasi Digital Bisnis Anda dengan <span class="text-yellow-300">Website Profesional</span>
                </h1>
                <p class="text-xl md:text-2xl mb-10 opacity-90">
                    Kami membantu UMKM dan perusahaan mengembangkan website yang responsif, SEO-friendly, dan menarik untuk meningkatkan penjualan online Anda.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('kontak') }}" class="bg-white text-primary-700 hover:bg-gray-100 font-bold px-8 py-4 rounded-lg text-lg transition-colors">
                        Mulai Sekarang <i class="ml-2 fas fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('portofolio') }}" class="bg-transparent border-2 border-white hover:bg-white/10 font-bold px-8 py-4 rounded-lg text-lg transition-colors">
                        Lihat Portofolio
                    </a>
                </div>
            </div>
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Website Cepat</h3>
                    <p>Loading cepat dengan optimasi terbaik untuk pengalaman pengguna yang optimal.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Responsif</h3>
                    <p>Tampil sempurna di semua perangkat: desktop, tablet, dan smartphone.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">SEO Friendly</h3>
                    <p>Struktur website yang dioptimalkan untuk peringkat terbaik di mesin pencari.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section class="bg-white dark:bg-gray-900 section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Layanan <span class="text-gradient">Kami</span></h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Kami menawarkan berbagai solusi digital untuk memenuhi kebutuhan bisnis Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl hover-lift">
                    <div class="h-14 w-14 gradient-bg rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-laptop-code text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Website Perusahaan</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Website profil perusahaan yang profesional untuk membangun kredibilitas bisnis.
                    </p>
                    <a href="{{ route('layanan') }}" class="text-primary-600 dark:text-primary-400 font-medium">
                        Selengkapnya <i class="ml-1 fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl hover-lift">
                    <div class="h-14 w-14 gradient-bg rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-shopping-cart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">E-Commerce</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Toko online lengkap dengan sistem pembayaran dan manajemen produk.
                    </p>
                    <a href="{{ route('layanan') }}" class="text-primary-600 dark:text-primary-400 font-medium">
                        Selengkapnya <i class="ml-1 fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl hover-lift">
                    <div class="h-14 w-14 gradient-bg rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-pencil-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Website Custom</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Pengembangan website khusus sesuai kebutuhan dan workflow bisnis Anda.
                    </p>
                    <a href="{{ route('layanan') }}" class="text-primary-600 dark:text-primary-400 font-medium">
                        Selengkapnya <i class="ml-1 fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="{{ route('layanan') }}" class="inline-flex items-center text-primary-600 dark:text-primary-400 font-bold text-lg">
                    Lihat Semua Layanan <i class="ml-2 fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Portofolio Preview -->
    <section class="bg-gray-50 dark:bg-gray-800 section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Hasil <span class="text-gradient">Karya Kami</span></h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Beberapa project yang telah kami selesaikan untuk klien dari berbagai industri
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden hover-lift">
                    <div class="h-48 gradient-bg flex items-center justify-center">
                        <i class="fas fa-store text-white text-6xl opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Toko Online Fashion</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Website e-commerce sederhana dengan sistem inventory dan payment gateway terintegrasi.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-primary-600 dark:text-primary-400">Selesai dalam 30 hari</span>
                            <a href="{{ route('portofolio') }}" class="text-gray-500 hover:text-primary-600">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden hover-lift">
                    <div class="h-48 bg-linear-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-building text-white text-6xl opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Website Perusahaan Konstruksi</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Website profil dengan galeri project dan sistem kontak yang responsif.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-primary-600 dark:text-primary-400">Selesai dalam 21 hari</span>
                            <a href="{{ route('portofolio') }}" class="text-gray-500 hover:text-primary-600">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden hover-lift">
                    <div class="h-48 bg-linear-to-r from-green-500 to-teal-600 flex items-center justify-center">
                        <i class="fas fa-utensils text-white text-6xl opacity-80"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Website Restoran</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Website menu online dengan sistem reservasi dan pemesanan makanan.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-primary-600 dark:text-primary-400">Selesai dalam 25 hari</span>
                            <a href="{{ route('portofolio') }}" class="text-gray-500 hover:text-primary-600">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('portofolio') }}" class="bg-primary-600 hover:bg-primary-700 text-white font-bold px-8 py-3 rounded-lg transition-colors">
                    Lihat Semua Portofolio
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-linear-to-r from-primary-700 to-secondary-600 text-white section-padding">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Siap Membangun Website untuk Bisnis Anda?
            </h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto opacity-90">
                Konsultasi gratis dengan tim kami untuk mengetahui solusi terbaik untuk kebutuhan digital bisnis Anda.
            </p>
            <a href="{{ route('kontak') }}" class="bg-white text-primary-700 hover:bg-gray-100 font-bold px-10 py-4 rounded-lg text-lg transition-colors inline-flex items-center">
                <i class="fas fa-calendar-check mr-3"></i> Jadwalkan Konsultasi Gratis
            </a>
        </div>
    </section>
@endsection
