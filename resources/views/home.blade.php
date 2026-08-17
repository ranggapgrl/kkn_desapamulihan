@extends('layouts.app')

@section('content')

{{-- HERO SPLIT LAYOUT DENGAN BACKGROUND CAROUSEL --}}
<section class="relative pt-32 pb-20 lg:pt-36 lg:pb-32 overflow-hidden min-h-[90vh] flex items-center">
    
    <!-- 1. LAYER PALING BAWAH: Carousel Background (-z-20) -->
    <div class="absolute inset-0 -z-20">
        <div class="flex transition-transform duration-1000 ease-in-out h-full w-full" id="hero-track">
            <div class="min-w-full h-full relative">
                <img src="{{ asset('images/pamulihan-1.jpg') }}" alt="Pamulihan 1" class="w-full h-full object-cover">
            </div>
            <div class="min-w-full h-full relative">
                <img src="{{ asset('images/pamulihan-2.jpg') }}" alt="Pamulihan 2" class="w-full h-full object-cover">
            </div>
            <div class="min-w-full h-full relative">
                <img src="{{ asset('images/pamulihan-3.jpg') }}" alt="Pamulihan 3" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <!-- 2. LAYER TENGAH: Overlay Gradasi (Dibuat lebih terang/transparan) -->
    <div class="absolute inset-0 bg-ink-dark/60 sm:bg-gradient-to-r sm:from-ink-dark/80 sm:via-ink-dark/50 sm:to-transparent -z-10"></div>

    <!-- 3. LAYER ATAS: Konten Utama -->
    <div class="max-w-7xl mx-auto px-5 lg:px-10 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center relative z-10 w-full">
        
        <!-- Bagian Kiri: Teks -->
        <div class="lg:col-span-6 text-left relative z-10">
            
            <h1 data-reveal style="transition-delay: 90ms" class="font-display text-paper text-4xl sm:text-5xl lg:text-6xl font-bold leading-[1.15] mb-6">
                Membangun <br>
                <span class="text-gold">{{ $desa['nama_desa'] }}</span> <br>
                Lebih Maju.
            </h1>
            
            <p data-reveal style="transition-delay: 180ms" class="text-paper/90 text-base lg:text-lg leading-relaxed max-w-lg mb-10">
                {{ $desa['kecamatan'] }}, {{ $desa['kabupaten'] }}. {{ $desa['tagline'] }}
            </p>
            
            <div data-reveal style="transition-delay: 270ms" class="flex flex-wrap items-center gap-4">
                <a href="{{ route('profil') }}" class="bg-gold hover:bg-gold-dark text-ink-dark font-semibold px-8 py-4 rounded-xl transition-all hover:shadow-lg hover:-translate-y-1">
                    Jelajahi Profil
                </a>
                <a href="{{ route('potensi') }}" class="text-paper hover:text-gold font-semibold px-6 py-4 flex items-center gap-2 transition-colors">
                    Lihat Potensi <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>

        <!-- Bagian Kanan: Bento Grid Stats (Kotak Statistik) -->
        <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-5 lg:gap-6 relative z-10 mt-8 lg:mt-0">
            @foreach ($desa['statistik'] as $i => $stat)
                <div data-reveal style="transition-delay: {{ 300 + ($i * 100) }}ms" 
                     class="bg-paper/95 backdrop-blur-md border border-paper/20 p-6 sm:p-7 rounded-3xl shadow-xl shadow-ink/30 hover:-translate-y-2 transition-transform duration-300 flex flex-col justify-center">
                    <div class="w-12 h-12 rounded-2xl bg-ink/10 text-ink flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <p class="font-display font-bold text-3xl lg:text-4xl text-ink mb-1 counter" data-target="{{ $stat['nilai'] }}">0</p>
                    <p class="text-sm font-semibold text-sawah mb-1">{{ $stat['satuan'] }}</p>
                    <p class="text-xs text-inktext/60">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>

@include('partials.divider')

{{-- TENTANG --}}
<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <div data-reveal>
        <p class="text-sawah font-semibold text-sm tracking-wide uppercase mb-3">Tentang Kami</p>
        <h2 class="font-display text-3xl lg:text-4xl font-semibold text-ink leading-tight mb-5">
            Selayang Pandang {{ $desa['nama_desa'] }}
        </h2>
        <div class="text-inktext/75 leading-relaxed space-y-4">
            @foreach (explode("\n\n", $desa['profil']['sejarah']) as $paragraf)
                <p>{{ $paragraf }}</p>
            @endforeach
        </div>
        <a href="{{ route('profil') }}" class="inline-flex items-center gap-2 mt-6 text-gold-dark font-semibold hover:gap-3 transition-all">
            Baca Selengkapnya
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
    <div data-reveal style="transition-delay: 120ms" class="bg-paper-alt border border-ink/10 rounded-xl p-8 lg:p-10">
        <dl class="grid grid-cols-2 gap-6">
            <div>
                <dt class="text-xs uppercase tracking-wide text-inktext/50 mb-1">Berdiri</dt>
                <dd class="font-display text-xl font-semibold text-ink">{{ $desa['profil']['tahun_berdiri'] }}</dd>
            </div>
            <div>
                <dt class="text-xs uppercase tracking-wide text-inktext/50 mb-1">Kepala Desa</dt>
                <dd class="font-display text-xl font-semibold text-ink">{{ $desa['profil']['kepala_desa'] }}</dd>
            </div>
            <div class="col-span-2">
                <dt class="text-xs uppercase tracking-wide text-inktext/50 mb-1">Klasifikasi Desa</dt>
                <dd class="font-display text-xl font-semibold text-ink">{{ $desa['profil']['klasifikasi'] }}</dd>
            </div>
            <div class="col-span-2 pt-4 border-t border-ink/10">
                <dt class="text-xs uppercase tracking-wide text-inktext/50 mb-1">Visi</dt>
                <dd class="text-inktext/75 leading-relaxed">{{ $desa['profil']['visi'] }}</dd>
            </div>
        </dl>
    </div>
</section>

{{-- KUTIPAN KEPALA DESA --}}
<section class="bg-ink relative overflow-hidden">
    <div class="absolute inset-0 text-paper/5 bg-topo"></div>
    <div data-reveal class="relative max-w-3xl mx-auto px-5 lg:px-10 py-16 lg:py-20 text-center">
        <svg class="w-9 h-9 text-gold/50 mx-auto mb-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.17 6C4.86 6 3 7.86 3 10.17c0 2.06 1.6 3.75 3.62 3.93-.36 1.6-1.5 2.9-3.12 3.55l.94 1.35c2.7-1.05 4.56-3.6 4.56-6.83V6H7.17zm10 0c-2.31 0-4.17 1.86-4.17 4.17 0 2.06 1.6 3.75 3.62 3.93-.36 1.6-1.5 2.9-3.12 3.55l.94 1.35c2.7-1.05 4.56-3.6 4.56-6.83V6h-1.83z"/></svg>
        <p class="font-display text-paper text-xl lg:text-2xl leading-relaxed">
            Kami ucapkan selamat datang bagi siapapun yang ingin bersinergi memajukan desa. Harapan kami, potensi pertanian dan peternakan warga terus meningkat mutu dan produksinya, berkelanjutan untuk generasi berikutnya.
        </p>
        <p class="text-gold font-semibold mt-6">{{ $desa['profil']['kepala_desa'] }}</p>
        <p class="text-paper/50 text-sm">Kepala Desa Pamulihan</p>
    </div>
</section>

{{-- POTENSI UNGGULAN --}}
<section class="bg-paper-alt border-y border-ink/10">
    <div class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
        
        <!-- Bagian Judul & Tombol -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6" data-reveal>
            <div>
                <p class="text-sawah-dark font-semibold text-sm tracking-widest uppercase mb-3">Sektor Ekonomi & Alam</p>
                <h2 class="font-display text-4xl lg:text-5xl font-bold text-ink">Potensi Unggulan Desa</h2>
            </div>
            
            <a href="{{ url('/potensi') }}" class="inline-flex items-center gap-2 text-ink hover:text-gold-dark font-semibold transition-colors group pb-2 md:pb-3 border-b-2 border-transparent hover:border-gold/50">
                Lihat Semua Potensi 
                <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

        <!-- GRID KARTU -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @php
                $previewPotensi = array_slice($desa['potensi'], 0, 3);
            @endphp

            @foreach($previewPotensi as $index => $item)
                <a href="{{ url('/potensi') }}" data-reveal style="transition-delay: {{ $index * 100 }}ms"
                   class="group relative bg-white rounded-[2rem] p-8 md:p-10 border border-ink/5 hover:border-gold/30 hover:shadow-2xl hover:shadow-ink/10 transition-all duration-500 hover:-translate-y-3 overflow-hidden flex flex-col h-full">

                    <div class="absolute -right-12 -top-12 w-48 h-48 bg-gold/0 rounded-full blur-2xl group-hover:bg-gold/10 transition-colors duration-700 pointer-events-none"></div>

                    <div class="flex items-start justify-between mb-8 relative z-10">
                        
                        <div class="w-16 h-16 rounded-2xl bg-paper-alt border border-ink/5 flex items-center justify-center text-ink group-hover:scale-110 group-hover:bg-ink group-hover:text-gold shadow-sm transition-all duration-500">
                            @php $kategori = strtolower($item['kategori']); @endphp
                            
                            @if(str_contains($kategori, 'pertanian') || str_contains($kategori, 'perkebunan'))
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21v-8m0 0a8.953 8.953 0 005.657-2.343A8.953 8.953 0 0021 5.002a8.953 8.953 0 00-5.657 2.343A8.953 8.953 0 0012 13zm0 0a8.953 8.953 0 01-5.657-2.343A8.953 8.953 0 013 5.002a8.953 8.953 0 015.657 2.343A8.953 8.953 0 0112 13z"></path></svg>
                            @elseif(str_contains($kategori, 'peternakan'))
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10"></path></svg>
                            @elseif(str_contains($kategori, 'seni') || str_contains($kategori, 'budaya'))
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                            @elseif(str_contains($kategori, 'umkm') || str_contains($kategori, 'industri'))
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path></svg>
                            @else
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            @endif
                        </div>

                        <span class="px-4 py-2 rounded-full bg-paper-alt text-inktext/70 text-xs font-semibold uppercase tracking-wider border border-ink/5 group-hover:bg-gold/15 group-hover:text-gold-dark group-hover:border-gold/30 transition-colors duration-500">
                            {{ $item['kategori'] }}
                        </span>
                    </div>

                    <div class="relative z-10 flex-grow flex flex-col">
                        <h3 class="font-display text-2xl font-bold text-ink mb-4 group-hover:text-gold-dark transition-colors duration-300">
                            {{ $item['nama'] }}
                        </h3>
                        <p class="text-inktext/70 leading-relaxed text-sm flex-grow line-clamp-3">
                            {{ $item['deskripsi'] }}
                        </p>

                        <div class="mt-8 flex items-center text-xs font-semibold text-ink/30 transition-colors duration-300 overflow-hidden">
                            <span class="opacity-0 -translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 group-hover:text-ink transition-all duration-500 ease-out">
                                Pelajari Selengkapnya
                            </span>
                            <div class="w-8 h-[1px] bg-ink/20 mx-3 group-hover:bg-ink/50 group-hover:w-12 transition-all duration-500"></div>
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 group-hover:text-ink transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- BERITA --}}
<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div data-reveal class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
        <div>
            <p class="text-sawah font-semibold text-sm tracking-wide uppercase mb-3">Informasi Terkini</p>
            <h2 class="font-display text-3xl lg:text-4xl font-semibold text-ink">Berita Desa Terbaru</h2>
        </div>
        <a href="{{ route('berita') }}" class="text-gold-dark font-semibold hover:underline">Lihat Semua Berita &rarr;</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($desa['berita'] as $i => $berita)
            <article data-reveal style="transition-delay: {{ $i * 90 }}ms" class="border border-ink/10 rounded-xl overflow-hidden hover:-translate-y-1 hover:shadow-lg hover:shadow-ink/5 transition-all">
                <div class="h-40 bg-gradient-to-br from-ink to-sawah flex items-center justify-center">
                    <span class="text-paper/40 font-mono text-xs uppercase tracking-widest">Berita</span>
                </div>
                <div class="p-6">
                    <p class="text-xs font-mono text-gold-dark mb-2">{{ $berita['tanggal'] }}</p>
                    <h3 class="font-display text-lg font-semibold text-ink mb-2 leading-snug">{{ $berita['judul'] }}</h3>
                    <p class="text-sm text-inktext/65 leading-relaxed">{{ $berita['ringkasan'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

@include('partials.divider')

{{-- LOKASI --}}
<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
    <div data-reveal>
        <p class="text-sawah font-semibold text-sm tracking-wide uppercase mb-3">Geografis</p>
        <h2 class="font-display text-3xl lg:text-4xl font-semibold text-ink leading-tight mb-5">
            Lokasi Kantor {{ $desa['nama_desa'] }}
        </h2>
        <p class="text-inktext/75 leading-relaxed mb-5">
            Kantor desa berada di kawasan perbukitan pada koordinat perkiraan <span class="font-mono text-ink">{{ $desa['kontak']['koordinat']['lat'] }}, {{ $desa['kontak']['koordinat']['lng'] }}</span>.
        </p>
        <p class="text-inktext/70 leading-relaxed">{{ $desa['kontak']['alamat'] }}</p>
    </div>
    <div data-reveal style="transition-delay: 120ms" class="rounded-xl overflow-hidden border border-ink/10 h-72 lg:h-80">
        <iframe
            class="w-full h-full"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            src="https://maps.google.com/maps?q={{ $desa['kontak']['koordinat']['lat'] }},{{ $desa['kontak']['koordinat']['lng'] }}&z=13&output=embed">
        </iframe>
    </div>
</section>

<!-- Script Khusus untuk Menjalankan Background Carousel Hero -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('hero-track');
        if(!track) return; 
        
        const slides = track.children;
        let currentIndex = 0;
        const totalSlides = slides.length;

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        // Background akan bergeser otomatis setiap 4 detik (4000ms)
        setInterval(nextSlide, 4000);
    });
</script>

@endsection