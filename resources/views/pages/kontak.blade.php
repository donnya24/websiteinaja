@extends('layouts.main')

@section('title', 'Kontak - WebSiteInAja')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-bg text-white">
        <div class="container mx-auto px-4 py-20">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Hubungi <span class="text-yellow-300">Kami</span></h1>
                <p class="text-xl opacity-90">
                    Siap membantu Anda mewujudkan website impian. Konsultasikan kebutuhan digital bisnis Anda dengan tim kami.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-white dark:bg-gray-900 section-padding">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold mb-6">Kirim Pesan</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-8">
                        Isi form berikut dan kami akan menghubungi Anda dalam waktu 1x24 jam.
                    </p>
                    
                    <form id="contactForm" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Nama Lengkap *
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Email *
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Nomor Telepon
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition">
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Jenis Layanan yang Dibutuhkan
                            </label>
                            <select 
                                id="service" 
                                name="service"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition">
                                <option value="">Pilih Layanan</option>
                                <option value="website">Website Perusahaan</option>
                                <option value="ecommerce">E-Commerce</option>
                                <option value="custom">Website Custom</option>
                                <option value="maintenance">Maintenance</option>
                                <option value="seo">SEO Optimization</option>
                                <option value="consultation">Konsultasi</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Pesan *
                            </label>
                            <textarea 
                                id="message" 
                                name="message"
                                rows="5"
                                required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none transition"></textarea>
                        </div>
                        
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                id="consent"
                                name="consent"
                                required
                                class="h-4 w-4 text-primary-600 rounded border-gray-300 focus:ring-primary-500">
                            <label for="consent" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                Saya setuju dengan <a href="#" class="text-primary-600 hover:underline">kebijakan privasi</a> dan ingin dihubungi oleh tim WebSiteInAja.
                            </label>
                        </div>
                        
                        <button 
                            type="submit"
                            class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Kirim Pesan <i class="ml-2 fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

                <!-- Contact Info & Map -->
                <div>
                    <h2 class="text-3xl font-bold mb-6">Informasi Kontak</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-8">
                        Anda juga dapat menghubungi kami melalui kontak berikut:
                    </p>
                    
                    <div class="space-y-6 mb-8">
                        
                        <div class="flex items-start">
                            <div class="h-12 w-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-600 dark:text-green-400 mr-4">
                                <i class="fas fa-phone text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Telepon</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    <a href="tel:+622112345678" class="hover:text-primary-600 transition-colors">+62 21 1234 5678</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="h-12 w-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 mr-4">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Email</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    <a href="mailto:yoadadeh@gmail.com" class="hover:text-primary-600 transition-colors">yoadadeh@gmail.com</a><br>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="h-12 w-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-purple-600 dark:text-purple-400 mr-4">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Jam Operasional</h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Senin - Jumat: 09:00 - 17:00 WIB<br>
                                    Sabtu: 09:00 - 12:00 WIB<br>
                                    Minggu & Hari Libur: Tutup
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mb-8">
                        <h3 class="font-bold text-lg mb-4">Ikuti Kami</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="h-10 w-10 bg-gray-100 dark:bg-gray-800 hover:bg-primary-600 hover:text-white text-gray-700 dark:text-gray-300 rounded-full flex items-center justify-center transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="h-10 w-10 bg-gray-100 dark:bg-gray-800 hover:bg-primary-600 hover:text-white text-gray-700 dark:text-gray-300 rounded-full flex items-center justify-center transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-gray-50 dark:bg-gray-800 section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Pertanyaan <span class="text-gradient">Umum</span></h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Berikut beberapa pertanyaan yang sering diajukan oleh klien kami.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-4">
                <div 
                    x-data="{ open: false }"
                    class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden">
                    <button 
                        @click="open = !open"
                        class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="font-bold text-lg">Berapa lama waktu pembuatan website?</span>
                        <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-primary-600"></i>
                    </button>
                    <div 
                        x-show="open"
                        x-transition
                        class="px-6 pb-4 text-gray-600 dark:text-gray-400">
                        <p>Waktu pengerjaan bervariasi tergantung kompleksitas website. Website perusahaan sederhana biasanya selesai dalam 2-3 minggu, sedangkan website e-commerce membutuhkan waktu 4-6 minggu. Kami selalu memberikan timeline yang jelas di awal project.</p>
                    </div>
                </div>
                
                <div 
                    x-data="{ open: false }"
                    class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden">
                    <button 
                        @click="open = !open"
                        class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="font-bold text-lg">Apakah harga sudah termasuk domain dan hosting?</span>
                        <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-primary-600"></i>
                    </button>
                    <div 
                        x-show="open"
                        x-transition
                        class="px-6 pb-4 text-gray-600 dark:text-gray-400">
                        <p>Harga paket pembuatan website belum termasuk domain dan hosting. Namun, kami akan membantu Anda memilih dan mengatur domain serta hosting yang sesuai dengan kebutuhan website Anda. Kami juga menawarkan paket hosting dengan harga khusus untuk klien kami.</p>
                    </div>
                </div>
                
                <div 
                    x-data="{ open: false }"
                    class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden">
                    <button 
                        @click="open = !open"
                        class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="font-bold text-lg">Apakah website bisa diupdate sendiri?</span>
                        <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-primary-600"></i>
                    </button>
                    <div 
                        x-show="open"
                        x-transition
                        class="px-6 pb-4 text-gray-600 dark:text-gray-400">
                        <p>Ya, semua website yang kami buat dilengkapi dengan Content Management System (CMS) yang mudah digunakan. Anda dapat mengupdate konten seperti teks, gambar, dan artikel tanpa perlu pengetahuan pemrograman. Kami juga memberikan pelatihan singkat untuk pengelolaan website.</p>
                    </div>
                </div>
                
                <div 
                    x-data="{ open: false }"
                    class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden">
                    <button 
                        @click="open = !open"
                        class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <span class="font-bold text-lg">Apakah ada biaya maintenance setelah website selesai?</span>
                        <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-primary-600"></i>
                    </button>
                    <div 
                        x-show="open"
                        x-transition
                        class="px-6 pb-4 text-gray-600 dark:text-gray-400">
                        <p>Website akan kami berikan garansi selama 30 hari setelah launch. Setelah itu, kami menawarkan paket maintenance dengan biaya mulai dari Rp 500.000/bulan yang mencakup update keamanan, backup data, dan dukungan teknis. Namun, penggunaan paket maintenance bersifat opsional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simpan data form (dalam implementasi nyata, kirim ke server)
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Tampilkan pesan sukses
        alert('Terima kasih! Pesan Anda telah berhasil dikirim. Tim kami akan menghubungi Anda dalam waktu 1x24 jam.');
        
        // Reset form
        this.reset();
    });
</script>
@endpush