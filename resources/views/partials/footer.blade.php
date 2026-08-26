@include('partials.divider')

<footer class="bg-ink text-paper/75 border-t border-gold/10 relative overflow-hidden">
    <div class="absolute inset-0 bg-kontur text-gold/5 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-5 lg:px-10 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div class="md:col-span-1">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-11 h-11 rounded-md bg-gold/15 border border-gold/30 text-gold flex items-center justify-center font-display font-bold text-lg shrink-0">
                    {{ strtoupper(substr($desa['nama_desa'], 5, 1)) }}
                </div>
                <p class="font-display font-semibold text-white text-lg leading-tight">{{ $desa['nama_desa'] }}</p>
            </div>
            <p class="text-sm leading-relaxed text-paper/70">{{ $desa['tagline'] }}</p>
        </div>

        <div>
            <p class="font-display text-white text-sm tracking-wide mb-4">Navigasi</p>
            <ul class="space-y-2.5 text-sm text-paper/70">
                <li><a href="{{ route('beranda') }}" class="hover:text-gold transition-colors">Beranda</a></li>
                <li><a href="{{ route('profil') }}" class="hover:text-gold transition-colors">Profil Desa</a></li>
                <li><a href="{{ route('pemerintahan') }}" class="hover:text-gold transition-colors">Pemerintahan</a></li>
                <li><a href="{{ route('potensi') }}" class="hover:text-gold transition-colors">Potensi Desa</a></li>
            </ul>
        </div>

        <div>
            <p class="font-display text-white text-sm tracking-wide mb-4">Informasi</p>
            <ul class="space-y-2.5 text-sm text-paper/70">
                <li><a href="{{ route('berita') }}" class="hover:text-gold transition-colors">Berita Desa</a></li>
                <li><a href="{{ route('galeri') }}" class="hover:text-gold transition-colors">Galeri</a></li>
                <li><a href="{{ route('layanan-publik') }}" class="hover:text-gold transition-colors">Layanan Publik</a></li>
                <li><a href="{{ route('kontak') }}" class="hover:text-gold transition-colors">Kontak Desa</a></li>
            </ul>
        </div>

        <div>
            <p class="font-display text-white text-sm tracking-wide mb-4">Kontak Resmi</p>
            <ul class="space-y-3 text-sm text-paper/70">
                <li class="flex items-start gap-2.5">
                    <svg class="w-4 h-4 mt-0.5 shrink-0 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span>{{ $desa['kontak']['alamat'] }}</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 shrink-0 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>{{ $desa['kontak']['telepon'] }}</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 shrink-0 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span>{{ $desa['kontak']['email'] }}</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 shrink-0 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>{{ $desa['kontak']['jam_layanan'] }}</span>
                </li>
            </ul>
        </div>
    </div>

    {{-- Baris logo mitra / kampus --}}
    <div class="relative border-t border-white/10">
        <div class="max-w-7xl mx-auto px-5 lg:px-10 py-8 flex flex-wrap items-center justify-center gap-8">
            <img src="{{ asset('images/umblogo.png') }}" alt="Logo Universitas Muhammadiyah Bandung" class="h-12 w-auto object-contain opacity-90 hover:opacity-100 transition-opacity">
            <img src="{{ asset('images/kkn1.png') }}" alt="Logo KKN Kelompok 1" class="h-12 w-auto object-contain opacity-90 hover:opacity-100 transition-opacity">
            <img src="{{ asset('images/kkn2.png') }}" alt="Logo KKN Kelompok 2" class="h-12 w-auto object-contain opacity-90 hover:opacity-100 transition-opacity">
            <img src="{{ asset('images/kkn3.png') }}" alt="Logo KKN Kelompok 3" class="h-12 w-auto object-contain opacity-90 hover:opacity-100 transition-opacity">
        </div>
    </div>

    <div class="relative border-t border-white/10">
        <div class="max-w-7xl mx-auto px-5 lg:px-10 py-5 text-center space-y-1.5">
            <p class="text-xs text-paper/50">
                &copy; {{ date('Y') }} {{ $desa['nama_desa'] }}. Portal informasi &amp; promosi profil desa.
            </p>
            <p class="text-[11px] text-paper/35 max-w-2xl mx-auto leading-relaxed">
            </p>
        </div>
    </div>
</footer>