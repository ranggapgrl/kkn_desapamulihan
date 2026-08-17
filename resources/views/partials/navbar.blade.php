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

<div class="fixed w-full top-6 z-50 px-4 lg:px-10 xl:px-16">
    <header class="max-w-[1300px] mx-auto bg-paper/85 backdrop-blur-md border border-ink/10 rounded-full px-5 lg:px-6 py-3 flex items-center justify-between shadow-xl shadow-ink/5">
        
        <a href="{{ route('beranda') }}" class="flex items-center gap-3 group shrink-0">
            <div class="w-10 h-10 rounded-full bg-ink flex items-center justify-center text-gold font-display font-bold text-base shrink-0 transition-transform group-hover:scale-105">
                {{ strtoupper(substr($desa['nama_desa'], 5, 1)) }}
            </div>
            <div class="leading-none hidden sm:block whitespace-nowrap">
                <p class="font-display font-semibold text-ink text-base">{{ $desa['nama_desa'] }}</p>
            </div>
        </a>

        <nav class="hidden lg:flex items-center gap-3 xl:gap-5 font-semibold text-sm">
            @foreach ($menu as $key => $item)
                <a href="{{ route($item['route']) }}"
                   class="relative px-2 py-1 transition-all whitespace-nowrap {{ ($aktif ?? '') === $key ? 'text-ink' : 'text-inktext/60 hover:text-ink' }}">
                    {{ $item['label'] }}
                    @if(($aktif ?? '') === $key)
                        <span class="absolute left-1/2 -bottom-1 w-1/2 h-0.5 bg-gold rounded-full -translate-x-1/2"></span>
                    @endif
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3 shrink-0">
            <a href="{{ route('kontak') }}" class="hidden lg:inline-flex items-center bg-gold hover:bg-gold-dark text-ink-dark text-sm font-bold px-6 py-2.5 rounded-full transition-colors shadow-sm whitespace-nowrap">
                Hubungi Desa
            </a>
            <button id="menu-toggle" aria-label="Buka menu" class="lg:hidden text-ink p-1">
                <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </header>

    <nav id="mobile-menu" class="hidden lg:hidden max-w-6xl mx-auto mt-3 bg-paper/95 backdrop-blur-md border border-ink/10 rounded-2xl p-4 shadow-lg">
        <div class="space-y-1">
            @foreach ($menu as $key => $item)
                <a href="{{ route($item['route']) }}"
                   class="block px-4 py-3 rounded-xl font-medium text-sm {{ ($aktif ?? '') === $key ? 'bg-gold/20 text-ink' : 'text-inktext/80 hover:bg-ink/5' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </nav>
</div>