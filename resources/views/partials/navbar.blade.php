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

<div class="fixed w-full top-0 z-50 border-b border-emerald-200/80 bg-[#f7f3ec]/90 backdrop-blur-md text-slate-600 text-xs font-mono hidden sm:block">
    <div class="max-w-7xl mx-auto px-5 lg:px-10 py-2 flex items-center justify-between">
        <div class="flex items-center gap-5">
            <span class="inline-flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-emerald-600"></span>{{ $desa['kontak']['telepon'] }}</span>
            <span>{{ $desa['kontak']['email'] }}</span>
        </div>
        <span>{{ $desa['kontak']['jam_layanan'] }}</span>
    </div>
</div>

<header class="fixed w-full top-7 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-5 lg:px-10">
        <div class="flex items-center justify-between rounded-full border border-emerald-200/70 bg-white/80 px-4 py-2.5 shadow-[0_20px_50px_-24px_rgba(15,36,25,0.4)] backdrop-blur-xl">
            <a href="{{ route('beranda') }}" class="flex items-center gap-3 shrink-0">
                <div class="w-11 h-11 rounded-full bg-gradient-to-br from-emerald-700 to-emerald-500 text-white flex items-center justify-center text-sm font-display font-bold shadow-md shadow-emerald-200/60">
                    {{ strtoupper(substr($desa['nama_desa'], 5, 1)) }}
                </div>
                <div class="leading-tight hidden sm:block">
                    <p class="font-display font-bold text-slate-800 text-base tracking-tight">{{ $desa['nama_desa'] }}</p>
                    <p class="font-mono text-[10px] text-slate-500 uppercase tracking-[0.15em]">{{ $desa['kecamatan'] }}, {{ $desa['kabupaten'] }}</p>
                </div>
            </a>

            <nav class="hidden lg:flex items-center gap-2 font-semibold text-sm">
                @foreach ($menu as $key => $item)
                    <a href="{{ route($item['route']) }}"
                       class="px-4 py-2 rounded-full transition-all {{ ($aktif ?? '') === $key ? 'bg-emerald-700 text-white shadow-lg shadow-emerald-200/80' : 'text-slate-600 hover:bg-emerald-50 hover:text-emerald-800' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('kontak') }}" class="hidden lg:inline-flex items-center bg-slate-900 text-white text-sm font-bold px-5 py-2.5 rounded-full shadow-sm hover:bg-slate-700 transition-colors whitespace-nowrap">
                    Hubungi Desa
                </a>
                <button id="menu-toggle" aria-label="Buka menu" class="lg:hidden text-slate-700 p-2 rounded-full hover:bg-emerald-50 transition-colors">
                    <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </div>

    <nav id="mobile-menu" class="hidden lg:hidden px-4 pt-2 pb-4">
        <div class="mx-auto max-w-7xl rounded-2xl border border-emerald-200 bg-white/90 p-3 shadow-lg backdrop-blur-md">
            @foreach ($menu as $key => $item)
                <a href="{{ route($item['route']) }}"
                   class="block px-3 py-3 rounded-xl {{ ($aktif ?? '') === $key ? 'text-emerald-800 font-bold bg-emerald-50' : 'text-slate-600' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </nav>
</header>