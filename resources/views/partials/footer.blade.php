@include('partials.divider')

<footer class="bg-ink text-paper/80">
    <div class="max-w-7xl mx-auto px-5 lg:px-10 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">

        <div class="md:col-span-1">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-11 h-11 rounded-full bg-gold flex items-center justify-center text-ink font-display font-semibold text-lg shrink-0">
                    {{ strtoupper(substr($desa['nama_desa'], 5, 1)) }}
                </div>
                <p class="font-display font-semibold text-paper text-lg leading-tight">{{ $desa['nama_desa'] }}</p>
            </div>
            <p class="text-sm leading-relaxed text-paper/60">{{ $desa['tagline'] }}</p>
        </div>

        <div>
            <p class="font-display text-paper text-sm tracking-wide mb-4">Navigasi</p>
            <ul class="space-y-2.5 text-sm">
                <li><a href="{{ route('beranda') }}" class="hover:text-gold transition-colors">Beranda</a></li>
                <li><a href="{{ route('profil') }}" class="hover:text-gold transition-colors">Profil Desa</a></li>
                <li><a href="{{ route('pemerintahan') }}" class="hover:text-gold transition-colors">Pemerintahan</a></li>
                <li><a href="{{ route('potensi') }}" class="hover:text-gold transition-colors">Potensi Desa</a></li>
            </ul>
        </div>

        <div>
            <p class="font-display text-paper text-sm tracking-wide mb-4">Informasi</p>
            <ul class="space-y-2.5 text-sm">
                <li><a href="{{ route('berita') }}" class="hover:text-gold transition-colors">Berita &amp; Galeri</a></li>
                <li><a href="{{ route('transparansi') }}" class="hover:text-gold transition-colors">Transparansi</a></li>
                <li><a href="{{ route('kontak') }}" class="hover:text-gold transition-colors">Kontak Desa</a></li>
            </ul>
        </div>

        <div>
            <p class="font-display text-paper text-sm tracking-wide mb-4">Kontak Resmi</p>
            <ul class="space-y-2.5 text-sm text-paper/70">
                <li>{{ $desa['kontak']['alamat'] }}</li>
                <li>{{ $desa['kontak']['telepon'] }}</li>
                <li>{{ $desa['kontak']['email'] }}</li>
                <li>{{ $desa['kontak']['jam_layanan'] }}</li>
            </ul>
        </div>
    </div>

    <div class="border-t border-paper/10">
        <p class="max-w-7xl mx-auto px-5 lg:px-10 py-5 text-xs text-paper/50 text-center">
            &copy; {{ date('Y') }} {{ $desa['nama_desa'] }}. Portal resmi pelayanan informasi publik.
        </p>
    </div>
</footer>