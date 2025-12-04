<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- Company Info -->
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <div class="h-10 w-10 gradient-bg rounded-lg flex items-center justify-center">
                        <i class="fas fa-code text-white text-xl"></i>
                    </div>
                    <div class="text-2xl font-bold">
                        WeSite<span class="text-primary-400">InAja</span>
                    </div>
                </div>
                <p class="text-gray-400 mb-6">
                    Perusahaan pengembangan website profesional yang berfokus pada solusi digital untuk bisnis Anda. Kami membantu UMKM dan perusahaan mengembangkan website yang efektif dan efisien.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="h-10 w-10 bg-gray-800 hover:bg-primary-600 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="h-10 w-10 bg-gray-800 hover:bg-primary-600 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-6">Menu Cepat</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-400 hover:text-primary-400 transition-colors">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" class="text-gray-400 hover:text-primary-400 transition-colors">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Layanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portofolio') }}" class="text-gray-400 hover:text-primary-400 transition-colors">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Portofolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kontak') }}" class="text-gray-400 hover:text-primary-400 transition-colors">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Kontak
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Layanan -->
            <div>
                <h3 class="text-xl font-bold mb-6">Layanan</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('layanan') }}" class="text-gray-400 hover:text-primary-400 transition-colors">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Website Perusahaan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" class="text-gray-400 hover:text-primary-400 transition-colors">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Toko Online (E-Commerce)
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" class="text-gray-400 hover:text-primary-400 transition-colors">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Website Custom
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kontak -->
            <div>
                <h3 class="text-xl font-bold mb-6">Kontak Kami</h3>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <i class="fas fa-phone text-primary-400 mr-3"></i>
                        <a href="tel:+622112345678" class="text-gray-400 hover:text-primary-400 transition-colors">+62 21 1234 5678</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-primary-400 mr-3"></i>
                        <a href="mailto:yoadadeh@gmail.com" class="text-gray-400 hover:text-primary-400 transition-colors">yoadadeh@gmail.com</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-clock text-primary-400 mr-3"></i>
                        <span class="text-gray-400">Senin - Jumat: 9:00 - 17:00</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="bg-gray-800 rounded-xl p-8 mb-12">
            <div class="max-w-2xl mx-auto text-center">
                <h3 class="text-2xl font-bold mb-4">Tetap Terhubung dengan Kami</h3>
                <p class="text-gray-400 mb-6">Dapatkan tips dan informasi terbaru seputar pengembangan website langsung ke email Anda.</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input 
                        type="email" 
                        placeholder="Email Anda" 
                        class="grow px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 focus:border-primary-500 focus:ring-2 focus:ring-primary-500 outline-none transition"
                        required>
                    <button 
                        type="submit" 
                        class="bg-primary-600 hover:bg-primary-700 text-white font-bold px-6 py-3 rounded-lg transition-colors whitespace-nowrap">
                        Berlangganan
                    </button>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-8 text-center">
            <p class="text-gray-500">
                &copy; {{ date('Y') }} WebSiteInAja. Semua hak dilindungi undang-undang.
            </p>
        </div>
    </div>
</footer>