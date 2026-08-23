@include('partials.divider')

<footer class="bg-slate-900 text-slate-300 border-t border-emerald-900/40">
    <div class="max-w-7xl mx-auto px-5 lg:px-10 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div class="md:col-span-1">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-11 h-11 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-700 text-white flex items-center justify-center font-display font-bold text-lg shrink-0 shadow-lg shadow-emerald-900/20">
                    {{ strtoupper(substr($desa['nama_desa'], 5, 1)) }}
                </div>
                <p class="font-display font-semibold text-white text-lg leading-tight">{{ $desa['nama_desa'] }}</p>
            </div>
            <p class="text-sm leading-relaxed text-slate-300/80">{{ $desa['tagline'] }}</p>
        </div>

        <div>
            <p class="font-display text-white text-sm tracking-wide mb-4">Navigasi</p>
            <ul class="space-y-2.5 text-sm text-slate-300/80">
                <li><a href="{{ route('beranda') }}" class="hover:text-emerald-300 transition-colors">Beranda</a></li>
                <li><a href="{{ route('profil') }}" class="hover:text-emerald-300 transition-colors">Profil Desa</a></li>
                <li><a href="{{ route('pemerintahan') }}" class="hover:text-emerald-300 transition-colors">Pemerintahan</a></li>
                <li><a href="{{ route('potensi') }}" class="hover:text-emerald-300 transition-colors">Potensi Desa</a></li>
            </ul>
        </div>

        <div>
            <p class="font-display text-white text-sm tracking-wide mb-4">Informasi</p>
            <ul class="space-y-2.5 text-sm text-slate-300/80">
                <li><a href="{{ route('berita') }}" class="hover:text-emerald-300 transition-colors">Berita &amp; Galeri</a></li>
                <li><a href="{{ route('transparansi') }}" class="hover:text-emerald-300 transition-colors">Transparansi</a></li>
                <li><a href="{{ route('kontak') }}" class="hover:text-emerald-300 transition-colors">Kontak Desa</a></li>
            </ul>
        </div>

        <div>
            <p class="font-display text-white text-sm tracking-wide mb-4">Kontak Resmi</p>
            <ul class="space-y-2.5 text-sm text-slate-300/80">
                <li>{{ $desa['kontak']['alamat'] }}</li>
                <li>{{ $desa['kontak']['telepon'] }}</li>
                <li>{{ $desa['kontak']['email'] }}</li>
                <li>{{ $desa['kontak']['jam_layanan'] }}</li>
            </ul>
        </div>
    </div>

    <div class="border-t border-slate-700/80">
        <p class="max-w-7xl mx-auto px-5 lg:px-10 py-5 text-xs text-slate-400 text-center">
            &copy; {{ date('Y') }} {{ $desa['nama_desa'] }}. Portal resmi pelayanan informasi publik.
        </p>
    </div>
</footer>