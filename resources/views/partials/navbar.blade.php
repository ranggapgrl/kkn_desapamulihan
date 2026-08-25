@php
    $menu = [
        'beranda'       => ['label' => 'Beranda', 'route' => 'beranda'],
        'profil'        => ['label' => 'Profil', 'route' => 'profil'],
        'pemerintahan'  => ['label' => 'Pemerintahan', 'route' => 'pemerintahan'],
        'potensi'       => ['label' => 'Potensi', 'route' => 'potensi'],
        'berita'        => ['label' => 'Berita', 'route' => 'berita'],
        'transparansi'  => ['label' => 'Transparansi', 'route' => 'transparansi'],
        'produk-hukum'  => ['label' => 'Produk Hukum', 'route' => 'produk-hukum'],
    ];
@endphp

<header class="relative z-40 bg-gradient-to-r from-emerald-700 via-sawah to-emerald-500 text-white">
    <div class="max-w-7xl mx-auto px-5 lg:px-10 py-4 flex items-center justify-between">
        <a href="{{ route('beranda') }}" class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-white/10 flex items-center justify-center text-white text-xl font-display font-bold">{{ strtoupper(substr($desa['nama_desa'], 0, 1)) }}</div>
            <div class="hidden sm:block">
                <p class="font-display text-lg font-bold leading-tight">{{ $desa['nama_desa'] }}</p>
                <p class="text-xs opacity-80">{{ $desa['kecamatan'] }}, {{ $desa['kabupaten'] }}</p>
            </div>
        </a>

        <nav class="hidden lg:flex items-center gap-3">
            @foreach ($menu as $key => $item)
                <a href="{{ route($item['route']) }}" class="px-3 py-2 rounded-md text-sm font-semibold transition-colors {{ ($aktif ?? '') === $key ? 'bg-white text-emerald-800' : 'hover:bg-white/10' }}">{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3">
            <a href="{{ route('kontak') }}" class="hidden lg:inline-flex items-center bg-white text-emerald-800 font-semibold px-4 py-2 rounded-md shadow-sm">Hubungi</a>
            <button id="mobile-toggle" class="lg:hidden p-2 rounded-md bg-white/10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="lg:hidden bg-emerald-600/90">
        <div class="max-w-7xl mx-auto px-5 py-3 space-y-2">
            @foreach ($menu as $key => $item)
                <a href="{{ route($item['route']) }}" class="block px-4 py-3 rounded-md {{ ($aktif ?? '') === $key ? 'bg-white text-emerald-700 font-bold' : 'text-white/90 hover:bg-white/10' }}">{{ $item['label'] }}</a>
            @endforeach
            <a href="{{ route('kontak') }}" class="block mt-2 px-4 py-3 rounded-md bg-white text-emerald-700 font-semibold">Kontak Desa</a>
        </div>
    </div>
</header>

<style>
    /* Quick JS-free toggle: show/hide mobile menu when button gets :focus (keuntungan: progressive enhancement) */
    #mobile-toggle:focus + #mobile-menu { display: block; }
</style>