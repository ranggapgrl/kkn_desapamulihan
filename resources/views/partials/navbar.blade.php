@php
    $menu = [
        'beranda'       => ['label' => 'Beranda', 'route' => 'beranda'],
        'profil'        => ['label' => 'Profil', 'route' => 'profil'],
        'pemerintahan'  => ['label' => 'Pemerintahan', 'route' => 'pemerintahan'],
        'potensi'       => ['label' => 'Potensi', 'route' => 'potensi'],
        'berita'        => ['label' => 'Berita & Galeri', 'route' => 'berita'],
        'transparansi'  => ['label' => 'Transparansi', 'route' => 'transparansi'],
    ];
@endphp

<div class="fixed w-full top-0 z-50 border-b border-white/10 bg-ink text-paper/70 text-xs font-mono hidden sm:block">
    <div class="max-w-7xl mx-auto px-5 lg:px-10 py-2 flex items-center justify-between elevation-tag">
        <div class="flex items-center gap-5">
            <span class="inline-flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-gold"></span>{{ $desa['kontak']['telepon'] }}</span>
            <span class="hidden md:inline">{{ $desa['kontak']['email'] }}</span>
        </div>
        <span class="hidden md:inline">Portal Resmi Pemerintah Desa &middot; {{ $desa['kontak']['jam_layanan'] }}</span>
    </div>
</div>

<header class="fixed w-full top-7 z-40 border-b border-slate-200 bg-paper-alt/95 backdrop-blur">
    <div class="max-w-7xl mx-auto px-4 sm:px-5 lg:px-10">
        <div class="flex items-center justify-between py-3">
            <a href="{{ route('beranda') }}" class="flex items-center gap-3 shrink-0">
                <div class="w-11 h-11 rounded-md bg-ink text-gold flex items-center justify-center text-base font-display font-bold border border-gold/25">
                    {{ strtoupper(substr($desa['nama_desa'], 5, 1)) }}
                </div>
                <div class="leading-tight hidden sm:block">
                    <p class="font-display font-bold text-ink text-base tracking-tight uppercase">{{ $desa['nama_desa'] }}</p>
                    <p class="font-mono text-[10px] text-slate-500 uppercase tracking-[0.15em]">{{ $desa['kecamatan'] }}, {{ $desa['kabupaten'] }}</p>
                </div>
            </a>

            <nav class="hidden lg:flex items-center gap-1 font-semibold text-sm">
                @foreach ($menu as $key => $item)
                    <a href="{{ route($item['route']) }}"
                       class="px-4 py-2 rounded-md border-b-2 transition-all {{ ($aktif ?? '') === $key ? 'border-gold text-ink' : 'border-transparent text-slate-600 hover:border-sawah/40 hover:text-ink' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('kontak') }}" class="hidden lg:inline-flex items-center bg-ink text-white text-sm font-bold px-5 py-2.5 rounded-md shadow-sm hover:bg-sawah-dark transition-colors whitespace-nowrap">
                    Hubungi Desa
                </a>
                <button id="menu-toggle" aria-label="Buka menu" class="lg:hidden text-ink p-2 rounded-md hover:bg-mist transition-colors">
                    <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </div>

    <nav id="mobile-menu" class="hidden lg:hidden px-4 pb-4 border-t border-slate-200">
        <div class="mx-auto max-w-7xl pt-2">
            @foreach ($menu as $key => $item)
                <a href="{{ route($item['route']) }}"
                   class="block px-3 py-3 border-l-4 {{ ($aktif ?? '') === $key ? 'border-gold text-ink font-bold bg-mist' : 'border-transparent text-slate-600' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </nav>
</header>