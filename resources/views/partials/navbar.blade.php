@php
    $menu = [
        'beranda'       => ['label' => 'Beranda', 'route' => 'beranda'],
        'profil'        => ['label' => 'Profil', 'route' => 'profil'],
        'pemerintahan'  => ['label' => 'Pemerintahan', 'route' => 'pemerintahan'],
        'potensi'       => ['label' => 'Potensi', 'route' => 'potensi'],
        'berita'        => ['label' => 'Berita', 'route' => 'berita'],
        'galeri'        => ['label' => 'Galeri', 'route' => 'galeri'],
        'layanan-publik'=> ['label' => 'Layanan Publik', 'route' => 'layanan-publik'],
        'produk-hukum'  => ['label' => 'Produk Hukum', 'route' => 'produk-hukum'],
    ];
@endphp

<header class="relative z-40 bg-white/95 backdrop-blur-sm border-b border-ink/10 sticky top-0">
    <div class="max-w-7xl mx-auto px-5 lg:px-10 py-3.5 flex items-center justify-between">
        <a href="{{ route('beranda') }}" class="flex items-center gap-3">
            <div class="w-11 h-11 rounded-full bg-ink flex items-center justify-center text-white text-lg font-display font-bold shrink-0">{{ strtoupper(substr($desa['nama_desa'], 0, 1)) }}</div>
            <div class="hidden sm:block">
                <p class="font-display text-base font-bold leading-tight text-ink">{{ $desa['nama_desa'] }}</p>
                <p class="text-xs text-inktext/60">{{ $desa['kecamatan'] }}, {{ $desa['kabupaten'] }}</p>
            </div>
        </a>

        <nav class="hidden lg:flex items-center gap-1">
            @foreach ($menu as $key => $item)
                <a href="{{ route($item['route']) }}" class="px-3 py-2 rounded-md text-sm font-semibold transition-colors {{ ($aktif ?? '') === $key ? 'bg-mist text-ink' : 'text-inktext/70 hover:bg-mist hover:text-ink' }}">{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3">
            <a href="{{ route('kontak') }}" class="hidden lg:inline-flex items-center bg-ink hover:bg-ink-dark text-white font-semibold px-4 py-2 rounded-md shadow-sm transition-colors">Hubungi</a>
            <button id="mobile-toggle" class="lg:hidden p-2 rounded-md border border-ink/15 text-ink">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="lg:hidden bg-white border-t border-ink/10">
        <div class="max-w-7xl mx-auto px-5 py-3 space-y-1">
            @foreach ($menu as $key => $item)
                <a href="{{ route($item['route']) }}" class="block px-4 py-3 rounded-md {{ ($aktif ?? '') === $key ? 'bg-mist text-ink font-bold' : 'text-inktext/70 hover:bg-mist' }}">{{ $item['label'] }}</a>
            @endforeach
            <a href="{{ route('kontak') }}" class="block mt-2 px-4 py-3 rounded-md bg-ink text-white font-semibold text-center">Kontak Desa</a>
        </div>
    </div>
</header>

<style>
    /* Quick JS-free toggle: show/hide mobile menu when button gets :focus (keuntungan: progressive enhancement) */
    #mobile-toggle:focus + #mobile-menu { display: block; }
</style>