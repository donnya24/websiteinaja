<nav class="bg-white shadow p-4" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="font-bold text-xl">StudioWebVideo</a>

        <button @click="open = !open" class="md:hidden">
            ☰
        </button>

        <ul class="hidden md:flex gap-6 font-medium">
            <li><a href="/" class="hover:text-blue-500">Home</a></li>
            <li><a href="/layanan" class="hover:text-blue-500">Layanan</a></li>
            <li><a href="/portfolio" class="hover:text-blue-500">Portfolio</a></li>
            <li><a href="/kontak" class="hover:text-blue-500">Kontak</a></li>
        </ul>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden" x-show="open">
        <ul class="p-4 flex flex-col gap-4 font-medium">
            <li><a href="/" class="hover:text-blue-500">Home</a></li>
            <li><a href="/layanan" class="hover:text-blue-500">Layanan</a></li>
            <li><a href="/portfolio" class="hover:text-blue-500">Portfolio</a></li>
            <li><a href="/kontak" class="hover:text-blue-500">Kontak</a></li>
        </ul>
    </div>
</nav>
